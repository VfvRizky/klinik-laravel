<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Pasien;
use App\Models\Rekam;
use App\Models\Dokter;
use App\Models\Obat;

class iterasi4test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     
    public function testLihatPendaftaran()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('rekam.index'));
            $response->assertStatus(200);
        }

    public function testTambahPendaftaran()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('pasien.store'), [   
                    'Nama' => 'alfa daftar',
                    'Alamat' => 'antah daftar',
                    'Lahir' => '11-11-2000',
                    'NIK' => '123',
                    'Kelamin' => 'laki-laki',
                    'Telepon' => '08123',
                    'Agama' => 'islam',
                    'Pendidikan' => '-',
                    'Pekerjaan' => '-',
                    'layanan' => 'Umum',
                    'keluhan' => 'pilek',
                    'dokter' => '1',
                    'g-recaptcha-response' => 'captcha'
                ]);
            $response->assertStatus(302);
    }

    public function testEditPendaftaran()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->put(route('rekam.update',2), [   
                    'layanan' => 'Umum',
                    'keluhan' => 'coba testing',
                    'dokter' => '1'
                ]);
            $response->assertStatus(302);
    }

    public function testHapusPendaftaran()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)->delete(route('rekam.destroy',2));
        $response->assertStatus(302);
    }

    public function testMelakukanPendaftaran()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('pasien.store'), [   
                    'id_player' => '2',
                    'layanan' => 'Asuransi',
                    'keluhan' => 'coba daftar',
                    'dokter' => '1',     
                ]);
            $response->assertStatus(302);
    }

    public function testInputRekamMedis()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('rekam.store'), [   
            'id_player' => '2',
            'layanan' => 'Asuransi',
            'keluhan' => 'Rekam Input',
            'dokter' => '1',
                ]);
            $response->assertStatus(302);
    }
}
