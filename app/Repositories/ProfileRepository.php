<?php

namespace App\Repositories;

use App\Jobs\WelcomeEmailJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class ProfileRepository
{
    /**
     * update the specified resource from storage.
     *
     */
    public function update(Request $request, $user)
    {
        $hc_link = generateRandomString(5);
        $url_components = unparse_url(parse_url($request->referral_link));
        parse_str($url_components['query'], $params);
        $key = $params['code'];
        if (isset($key)) {
            $user->update([
                'referral_link' => $request->referral_link,
                'hc_link' =>  $hc_link,
                'status' => 'enabled'
            ]);
        }
        $details = [
            'title' => 'Mail from Hyperverse Community',
            'url' => URL::to('/') . '/?code=' . $hc_link,
            'email' => $user->email
        ];
        dispatch(new WelcomeEmailJob($details));
        return ['success' => 'Profile Updated Successfully'];
    }
    /**
     * update the specified resource from storage.
     *
     */
    public function updateProfile(Request $request, $user)
    {

        $url_components = unparse_url(parse_url($request->referral_link));
        parse_str($url_components['query'], $params);
        $key = $params['code'];
        if (isset($key)) {
            if (is_null($user->hc_link)) {
                $user->update([
                    'referral_link' => $request->referral_link,
                    'hc_link' => generateRandomString(5),
                    'status' => 'enabled'
                ]);
            }
            $user->update([
                'referral_link' => $request->referral_link,
                'status' => 'enabled'
            ]);
            return ['success' => 'Referral Updated Successfully'];
        }
        return ['error' => 'Error While Updating Referral Link'];
    }
    /**
     * update the specified resource from storage.
     *
     */
    public function updateName(Request $request, $user)
    {
        $user->update([
            'name' => $request->name,
        ]);
        return ['Name Updated Successfully'];
    }
    /**
     * Update the profile country and preffered language specified logged in user in storage.
     *
     */
    public function updateLocation(Request $request, $user)
    {
        return $user->update($request->all());
    }
}
