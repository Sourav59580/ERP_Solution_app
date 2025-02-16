<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_registrations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company_name',85);
            $table->string('tagline',100)->nullable();
            $table->string('website',100)->nullable();
            $table->string('company_email',100);
            $table->string('founder',85);
            $table->string('founder_email',100);
            $table->bigInteger('contact_number');
            $table->string('street_address');
            $table->string('city',85);
            $table->string('state',85);
            $table->string('country',85);
            $table->bigInteger('pincode');
            $table->string('gstin',20)->nullable();
            $table->time('office_starts_at');
            $table->time('office_ends_at');
            $table->date('company_estd');
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->bigInteger('whatsApp')->nullable();
            $table->string('category',50);
            $table->string('erp_url');
            $table->string('password',70);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_registrations');
    }
}
