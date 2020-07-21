<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Capsule\Manager as Capsule;

class CrowdstrikeDropInstallguard extends Migration
{
    public function up()
    {
        $capsule = new Capsule();
        
        // Drop deprecated sensor_installguard column
        Schema::table('crowdstrike', function (Blueprint $table) {
            $table->dropColumn('sensor_installguard');
            
            $table->dropIndex('sensor_installguard');
        });

    }
    
    public function down()
    {
        $capsule = new Capsule();
        $capsule::schema()->create('crowdstrike', function (Blueprint $table) {
            $table->integer('sensor_installguard')->nullable();

            $table->index('sensor_installguard');
        });
    }
}
