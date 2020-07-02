    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('database', function (Blueprint $table) {
            $table->id();
            $table->integer('SeqNo')->nullable();
            $table->string('NameStore', 200)->nullable();
            $table->string('SESSEP', 50)->nullable();
            $table->string('Dimension', 50)->nullable();
            $table->integer('DimensionScore')->nullable();
            $table->date('Month')->nullable();
            $table->string('BranchCode', 15)->nullable();
            $table->string('ARTI', 50)->nullable();
            $table->string('ARCO', 50)->nullable();
            $table->string('EROS', 50)->nullable();
            $table->string('RSM', 50)->nullable();
            $table->string('ClusterSize', 50);
            $table->string('Channel', 50);
            $table->string('GKAMRSM', 50)->nullable();
            $table->string('NamaASM', 50)->nullable();
            $table->string('ASMKAM', 50)->nullable();
            $table->string('Partner', 50)->nullable();
            $table->string('Location', 50)->nullable();
            $table->string('City', 50)->nullable();
            $table->string('Region', 50)->nullable();
            $table->string('ASM', 191)->nullable();
            $table->string('PassingGrade', 50)->nullable();
            $table->datetime('CrtDate')->nullable();
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
        Schema::dropIfExists('database');
    }
}
