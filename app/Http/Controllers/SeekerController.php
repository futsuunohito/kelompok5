<?php
namespace App\Http\Controllers;
use App\Activity;
use App\Attachment;
use App\Company;
use App\Job;
use App\Link;
use App\Skill;
use App\User;
use App\Work;
use Illuminate\Filesystem\putFileAs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class SeekerController extends Controller
{
    public function personalInfo(Request $request){
    	$this->validate($request, [
    		'phone' => 'required|max:14',
    		]);
    	User::where('id', Auth::id())->update(['phone'=>$request->phone]);
    	$personalInfo = new Activity;
    	//If this user id doesn't exist then create one row with this 'user_id' in Activity table
    	if(Activity::where('user_id', Auth::id())->get()->isEmpty()){
	    	$personalInfo->location = $request->location;
            $personalInfo->user_id = Auth::id();
	    	$personalInfo->save();
    	}else{
    		//else if this 'user_id' already  exist in this table then just update it.
    	 Activity::where('user_id', Auth::id())->update(['location'=>$request->location]);
    	}
    	return redirect()->route('seeker.view');
    }
    //store Company profile data
    public function storeActivityProfile(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		]);
    	$newActivity = new Activity;
    	if(Activity::where('user_id', Auth::id())->get()->isEmpty()){
            $newActivity->image = $request->image;
    		$newActivity->save();
    	}else{
    		Activity::where('user_id', Auth::id())->update(['image'=>$request->image]);
    	}
    	
    	return $request->all();
    }
    //store jobseeker image
    public function storeImage(Request $request){
    	$user_image = $request->file('image');
    	if($request->hasFile('image')){
    		$image_original_name = $user_image->getClientOriginalName();
    		Storage::putFileAs('/img/', $user_image, $image_original_name);
    	}
    	Activity::where('user_id', Auth::id())->update(['image'=>$image_original_name]);
    	return redirect()->route('jobseeker.seeker_info');
    }
    public function seekerIndex(){
        
        return view('jobseeker.seeker_home');
    }
    
    public function education(Request $request){
    	Activity::where('user_id', Auth::id())->update(['degree'=>$request->degree, 'field'=>$request->field]);
    	return redirect()->route('seeker.view')->with('msg',"Education Updated Successfully");;
    }
    //Shows Work and skill form 
    public function showWorkAndSkillForm(){
    	$works = Work::where('user_id', Auth::id())->get();
    	$skills = Skill::where('user_id', Auth::id())->get();
    	return view('jobseeker.seeker_dashboard', compact('works','skills'));
    }
    //Posted Works data are stored here
    public function work(Request $request){
    	
    	$this->validate($request, [
    		'job_title'=>'required',
    		]);
    	$newWork = new Work;
    	$newWork->job_title = $request->job_title;
    	$newWork->job_role = $request->job_role;
    	$newWork->activity = $request->activity;
    	$newWork->user_id = Auth::id();
    	$newWork->save();
    	return $request->all();
    	
    }
    //Store Skills data
    public function skill(Request $request){
    	$newSkill = new Skill;
    	$newSkill->name = $request->name;
    	$newSkill->level = $request->level;
    	$newSkill->experience = $request->experience;
    	$newSkill->user_id = Auth::id();
    	$newSkill->save();
    	return $request->all();
    }
    public function deleteSkill($id){
    	$skill = skill::where('id', $id)->delete();
    	return redirect()->route('seeker.dashboard');
    }
    //DELETE SKILL
    public function skilldestroy(Skill $skills)
    {
        $skills->delete();
        return redirect()->route('seeker.view');/*->withDanger('Post berhasil dihapus');*/
    }
    //show edit cv form
    public function showEditCv(){
    	$works = Work::where('user_id', Auth::id())->get();
    	$skills = Skill::where('user_id', Auth::id())->get();
    	$user = User::find(Auth::id());
    	$activities = Activity::where('user_id', Auth::id())->get();
    	return view('jobseeker.seeker_edit_cv', compact('works','skills','user','activities'));
    }
    //store Edit_CV personal data
    public function storeEditCv(Request $request){
    	$user = User::where('id', Auth::id())->update(['name'=>$request->name,'phone'=>$request->phone]);
    	$activities = Activity::where('user_id', Auth::id())->update(['location'=>$request->location,'gender'=>$request->gender]);
    	
    	return $request->all();
    }
    //profile image upload
    public function profileImageUpload(Request $request){
    	$pro_image = $request->file('proimage');
    	if($request->hasFile('proimage')){
    		$proimage_original_name = $pro_image->getClientOriginalName();
    		Storage::putFileAs('public/images', $pro_image, $proimage_original_name);
    	}
    	User::where('id', Auth::id())->update(['image'=>$proimage_original_name]);
	    
    	return redirect()->route('seeker.edit_cv');
    }
    //store About me function data
    public function aboutMe(Request $request){
    	$about = $request->about_me;
    	Activity::where('user_id', Auth::id())->update(['about_me'=>$about]);
    	return $request->all();
    }
    //Show seeker Dashboard page
    public function showSeekerDashboard(){
    	$user = User::find(Auth::id());
    	return view('jobseeker.seeker_dashboard', compact('user'));
    }
    //show CV view page
    public function seekerCvView(){
    	$user = User::find(Auth::id());
    	$activity = Activity::where('user_id', Auth::id())->first();
    	$works = Work::where('user_id', Auth::id())->get();
    	$skills = Skill::where('user_id', Auth::id())->get();
    	return view('jobseeker.seeker_cv_view', compact('user','activity','works','skills'));
    }

    //show seeker home page
    public function index(){
    	return view('jobseeker.index'); //tadinya jobseeker.index -> admin.index
    }
    public function showInfo(){
        return view('jobseeker.seeker_info');
    }
    //Seeker Job view page
    public function viewJob($id){
        $jobData = Job::find($id);
        return view('jobseeker.seeker_job_view', compact('jobData'));
    }
     //Shows the Find jobs page with available jobs
    public function showFindJobs(){
        $jobs = Job::where('posted', 1)->get();
        return view('jobseeker.seeker_find_jobs', compact('jobs'));
    }
    //show Apply to a Job Form
    public function showApplyJobForm($id){
        $job = Job::find($id);
        $user = User::find(Auth::id());
        return view('jobseeker.seeker_apply_now', compact('job','user'));
    }
    //successfully Applied to Job
    public function appliedToJob($id){
        $user = User::find(Auth::id());
        $user->many_job()->attach($id);
        return redirect()->route('seeker.find_jobs')->with('msg',"Job Applied Successfully");
    }
    //seeker delete an applied job from dashboard
    public function deleteJob($id){
        $user = User::find(Auth::id());
        $user->many_job()->detach($id);
        return redirect()->route('seeker.dashboard');
     } 

     //Show Category wise jobs
     public function showCategoryWiseJobs(Request $request){
        $jobs = Job::whereIn('industry', $request->category)->get();
         return view('jobseeker.seeker_find_jobs', compact('jobs'));
     }
     //show Location wise jobs
     public function showLocationWiseJobs(Request $request){
        $jobs = Job::whereIn('city', $request->location)->get();
         return view('jobseeker.seeker_find_jobs', compact('jobs'));
     }
     //show jobs by Search Keywords
     public function showJobsBySearchKeywords(Request $request){
        $jobs = Job::where('title', 'like', '%'.$request->searchQuery.'%')->get();
         return view('jobseeker.seeker_find_jobs', compact('jobs'));
     }
     //show seeker  Settings
     public function showUserSettings(){
        $user = User::find(Auth::id());
          return view('jobseeker.seeker_setting', compact('user'));
      } 
      //store seeker settings
      public function storeUserSettings(Request $request){
        $user = User::find(Auth::id());
        $old_password = bcrypt($request->old_password);
        echo $old_password;
        $new_password = $request->new_password;
        if($old_password === $user->password){
            $user->password = bcrypt($new_password);
        }
        // return redirect()->route('seeker.settings');
      }
      //download CV
      public function downloadCV($id){
        $file = Attachment::find($id);
        $pathToFile = 'storage/attachments/'.$file->document;
          return response()->download($pathToFile);
      }
      //contact me page
     public function contact(){
         return view('contact');
     }
}//controller ends here