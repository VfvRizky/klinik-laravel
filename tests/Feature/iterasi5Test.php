<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Pegawai;

class iterasi5test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testMengelolaUser()
    {
        $user = User::where('is_superadmin', '1')->first();
        $response = $this->actingAs($user)
            ->put(route('user.update', 1), [
                'name' => 'coba testing',
                'isadmin' => '1',
                'issuperadmin' => '1',
                'email' => 'coba@gmail.com'
            ]);
        $response->assertStatus(302);
    }

    public function testLihatPegawai()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin', '1')->first();
        $response = $this->actingAs($user)
            ->get(route('pegawai.index'));
        $response->assertStatus(200);
    }

    public function testTambahPegawai()
    {
        $user = User::where('is_admin', '1')->first();
        $response = $this->actingAs($user)
            ->post(route('pegawai.store'), [
                'KodePegawai' => '999',
                'Nama' => 'pegawai testing',
                'Alamat' => 'alamat testing',
                'Kelamin' => 'perempuan',
                'Telepon' => '999',
                'Agama' => '-',
                'Jabatan' => '-'
            ]);
        $response->assertStatus(302);
    }

    public function testEditPegawai()
    {
        $user = User::where('is_admin', '1')->first();
        $response = $this->actingAs($user)
            ->put(route('pegawai.update', 1), [
                'KodePegawai' => '111',
                'Nama' => 'pegawai update',
                'Alamat' => 'alamat update',
                'Kelamin' => 'laki-laki',
                'Telepon' => '111',
                'Agama' => '-',
                'Jabatan' => '-'
            ]);
        $response->assertStatus(302);
    }

    public function testHapusPegawai()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)->delete(route('pegawai.destroy',1));
        $response->assertStatus(302);
    }
}
