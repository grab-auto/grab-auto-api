<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('Model_Year');
            $table->string('Vehicle_Manufacturer_Name');
            $table->string('Veh_Mfr_Code');
            $table->string('Vehicle_Type');
            $table->smallInteger('Rated_Horsepower');
            $table->smallInteger('No_of_Cylinders_and_Rotors');
            $table->string('Engine_Code');
            $table->string('Tested_Transmission_Type_Code');
            $table->string('Tested_Transmission_Type');
            $table->smallInteger('No_of_Gears');
            $table->string('Transmission_Lockup');
            $table->string('Drive_System_Code');
            $table->string('Drive_System_Description');
            $table->smallInteger('Transmission_Overdrive_Code');
            $table->string('Transmission_Overdrive_Desc');
            $table->integer('Equivalent_Test_Weight_lbs');
            $table->double('Axle_Ratio',9,5);
            $table->double('NV_Ratio',9,5);
            $table->double('Shift_Indicator_Light_Use_Cd',9,5);
            $table->string('Shift_Indicator_Light_Use_Desc');
            $table->double('THC_gmi',9,5);
            $table->double('CO_gmi',9,5);
            $table->double('CO2_gmi',9,5);
            $table->double('NOx_gmi',9,5);
            $table->double('PM_gmi',9,5);
            $table->double('CH4_gmi',9,5);
            $table->double('N2O_gmi',9,5);
            $table->double('RND_ADJ_FE',9,5);
            $table->string('FE_UNIT');
            $table->double('FE_Bag_1',9,5);
            $table->double('FE_Bag_2',9,5);
            $table->double('FE_Bag_3',9,5);
            $table->double('FE_Bag_4',9,5);
            $table->double('DTInertia_Work_Ratio_Rating',9,5);
            $table->double('DTAbsolute_Speed_Change_Rating',9,5);
            $table->double('DTEnergy_Economy_Rating',9,5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
