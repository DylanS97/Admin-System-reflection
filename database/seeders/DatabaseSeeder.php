<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeederTable::class);
        
        $this->deleteImages('public/storage/images');

        $companies = Companies::factory(60)->create();

        foreach ($companies as $company) {
            Employees::factory(random_int(10, 55))->create([
                'company_id' => $company->id
            ]);
        }
    }

    // Deletes images.
    public function deleteImages($dir)
    {
        ini_set('display_errors', '1');
        $directory = glob($dir . '/*');
        foreach($directory as $image){
            if(is_file($image)){
                unlink($image);
            }
        }
        print "Deleted Images from: " . $dir . "\n";
    }
}
