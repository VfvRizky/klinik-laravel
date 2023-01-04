<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Pasien;

class iterasi1test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testlogin()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
     
    public function testLihatPasien()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('pasien.index'));
            $response->assertStatus(200);
    
        }
    public function testCariPasien()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('pasien.index'));
            $response->assertStatus(200);
    }

    public function testTambahPasien()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('pasien.store'), [   
            'Nama' => 'alfa',
            'Alamat' => 'antah',
            'Lahir' => '11-11-2000',
            'NIK' => '123',
            'Kelamin' => 'laki-laki',
            'Telepon' => '08123',
            'Agama' => 'ss',
            'Pendidikan' => '-',
            'Pekerjaan' => '-',
            'layanan' => 'umum',
            'RekamMedis' => 'pilek',
            'doktor' => 'dr k',
            'g-recaptcha-response' => 'captcha'
                ]);
            $response->assertStatus(302);
    }

    public function testEditPasien()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)
            ->put(route('pasien.update', 1), [
            'Kodepasien' => '6666',
            'Nama' => 'Alfa',
            'Alamat' => 'Antah berantah',
            'Lahir' => '1-1-2001',
            'NIK' => '123',
            'Kelamin' => 'laki-laki',
            'Telepon' => '08123',
            'Agama' => 'islam',
            'Pendidikan' => '-',
            'Pekerjaan' => '-'
            ]);
        $response->assertStatus(302);
    }
    public function testHapusPasien()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)->delete(route('pasien.destroy',1));
        $response->assertStatus(302);
    }

    public function testLogout()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)
            ->post(route('logout'));
        $response->assertStatus(302);
    }
}
