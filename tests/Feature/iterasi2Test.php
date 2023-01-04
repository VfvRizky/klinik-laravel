<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Models\Dokter;
use App\Models\Jadwal;
use App\Models\Poli;

class iterasi2test extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     
    public function testLihatJadwal()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('jadwal.index'));
            $response->assertStatus(200);
    
        }

    public function testKelolaJadwal()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)
            ->put(route('jadwal.update', 1), [
            'Jadwal' => 'jadwal coba coba',
            ]);
        $response->assertStatus(302);
    }

    public function testLihatDokter()
    {
        $this->withoutExceptionHandling();
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->get(route('dokter.index'));
            $response->assertStatus(200);
    
        }

    public function testTambahDokter()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->post(route('dokter.store'), [   
            'Nama' => 'Dr Testing',
            'Alamat' => 'Antah berantah',
            'Spesialis' => '1',
            'Telepon' => '08999',
            'Jadwal' => '1'
                ]);
            $response->assertStatus(302);
    }

    public function testEditDokter()
    {
        $user = User::where('is_admin','1')->first();
            $response = $this->actingAs($user)
                ->put(route('dokter.update', 2), [   
            'Nama' => 'Dr Update',
            'Alamat' => 'Antah update',
            'Spesialis' => '1',
            'Telepon' => '99999',
            'Jadwal' => '1'
                ]);
            $response->assertStatus(302);
    }
    public function testHapusDokter()
    {
        $user = User::where('is_admin','1')->first();
        $response = $this->actingAs($user)->delete(route('dokter.destroy',1));
        $response->assertStatus(302);
    }
}
