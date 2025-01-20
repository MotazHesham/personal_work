<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySettingRequest;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('setting_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $settings = Setting::all(); 
        return view('admin.settings.index', compact('settings'));
    } 

    public function update(Request $request)
    {  
        if($request->setting_type == 'setting_1'){ 
            Setting::updateOrCreate(['key' => 'first_color'], ['value' => $request->first_color]);
            Setting::updateOrCreate(['key' => 'phone'], ['value' => $request->phone]);
            Setting::updateOrCreate(['key' => 'email'], ['value' => $request->email]);
            Setting::updateOrCreate(['key' => 'address'], ['value' => $request->address]);
            Setting::updateOrCreate(['key' => 'footer_copyright'], ['value' => $request->footer_copyright]);

            if ($request->has('logo')) {
                if( $request->input('logo') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('logo')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_logo_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 'logo'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 'logo'], ['value' => null]);
            }
            if ($request->has('cv')) {
                if( $request->input('cv') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('cv')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_cv_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 'cv'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 'cv'], ['value' => null]);
            }

        }elseif($request->setting_type == 'setting_2'){
            Setting::updateOrCreate(['key' => 'behance'], ['value' => $request->behance]);
            Setting::updateOrCreate(['key' => 'linkedin'], ['value' => $request->linkedin]);
            Setting::updateOrCreate(['key' => 'instagram'], ['value' => $request->instagram]);
            Setting::updateOrCreate(['key' => 'dribbble'], ['value' => $request->dribbble]); 
        }elseif($request->setting_type == 'setting_3'){
            Setting::updateOrCreate(['key' => 's1_1_first_title'], ['value' => $request->s1_1_first_title]);
            Setting::updateOrCreate(['key' => 's1_2_first_title'], ['value' => $request->s1_2_first_title]);
            Setting::updateOrCreate(['key' => 's1_1_second_title'], ['value' => $request->s1_1_second_title]);
            Setting::updateOrCreate(['key' => 's1_2_second_title'], ['value' => $request->s1_2_second_title]);
            Setting::updateOrCreate(['key' => 's1_first_description'], ['value' => $request->s1_first_description]);
            Setting::updateOrCreate(['key' => 's1_second_description'], ['value' => $request->s1_second_description]);
            if ($request->has('s1firstimage')) { 
                if($request->input('s1firstimage') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('s1firstimage')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_s1firstimage_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 's1firstimage'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 'metaimage'], ['value' => null]);
            }
            if ($request->has('s1secondimage')) { 
                if($request->input('s1secondimage') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('s1secondimage')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_s1secondimage_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 's1secondimage'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 's1secondimage'], ['value' => null]);
            }
        }elseif($request->setting_type == 'setting_4'){ 
            Setting::updateOrCreate(['key' => 'meta_title'], ['value' => $request->meta_title]);
            Setting::updateOrCreate(['key' => 'meta_description'], ['value' => $request->meta_description]);
            Setting::updateOrCreate(['key' => 'meta_keywords'], ['value' => implode(',',$request->meta_keywords)]); 
            if ($request->has('metaimage')) { 
                if($request->input('metaimage') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('metaimage')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_metaimage_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 'metaimage'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 'metaimage'], ['value' => null]);
            }
        }elseif($request->setting_type == 'setting_5'){
            Setting::updateOrCreate(['key' => 'expertise_1_name'], ['value' => $request->expertise_1_name]); 
            Setting::updateOrCreate(['key' => 'expertise_1_description'], ['value' => implode(',',$request->expertise_1_description)]); 
            Setting::updateOrCreate(['key' => 'expertise_2_name'], ['value' => $request->expertise_2_name]); 
            Setting::updateOrCreate(['key' => 'expertise_2_description'], ['value' => implode(',',$request->expertise_2_description)]); 
            Setting::updateOrCreate(['key' => 'expertise_3_name'], ['value' => $request->expertise_3_name]); 
            Setting::updateOrCreate(['key' => 'expertise_3_description'], ['value' => implode(',',$request->expertise_3_description)]); 
            Setting::updateOrCreate(['key' => 'expertise_4_name'], ['value' => $request->expertise_4_name]); 
            Setting::updateOrCreate(['key' => 'expertise_4_description'], ['value' => implode(',',$request->expertise_4_description)]); 
        }elseif($request->setting_type == 'setting_6'){
            Setting::updateOrCreate(['key' => 'about_description'], ['value' => $request->about_description]);  
            if ($request->has('aboutimage')) { 
                if($request->input('aboutimage') != "undefined"){ 
                    $file = new File(storage_path('tmp/uploads/' . basename($request->input('aboutimage')))); 
                    $extension = pathinfo($file, PATHINFO_EXTENSION);
                    $file_name =  time() . '_aboutimage_settings.'. $extension;
                    $file->move('public/settings',$file_name);
                    Setting::updateOrCreate(['key' => 'aboutimage'], ['value' => 'settings/' . $file_name]);
                }
            }else{
                Setting::updateOrCreate(['key' => 'aboutimage'], ['value' => null]);
            }
        }

        Artisan::call('cache:clear');
        
        return redirect()->route('admin.settings.index',['setting_type' => $request->setting_type]);
    } 

    
    public function overWriteEnvFile($type, $val)
    { 
        $path = base_path('.env');
        if (file_exists($path)) {
            $val = '"' . trim($val) . '"';
            if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
                file_put_contents($path, str_replace(
                    $type . '="' . env($type) . '"',
                    $type . '=' . $val,
                    file_get_contents($path)
                ));
            } else {
                file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
            }
        } 
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('setting_create') && Gate::denies('setting_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Setting();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
