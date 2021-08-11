<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class episode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episode')->delete();
        DB::table('episode')->insert([
            ['episode_id'=>1,'episode_name'=>'Tập 1','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>10500,'week_view'=>1042,'month_view'=>23423,'year_view'=>235745,'status'=>1,'movie_id'=>1],
            ['episode_id'=>2,'episode_name'=>'Tập 2','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>12520,'week_view'=>1786,'month_view'=>32441,'year_view'=>234235,'status'=>0,'movie_id'=>2],
            ['episode_id'=>3,'episode_name'=>'Tập 3','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>24332,'week_view'=>1055,'month_view'=>12332,'year_view'=>23426,'status'=>1,'movie_id'=>3],
            ['episode_id'=>4,'episode_name'=>'Tập 4','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>23360,'week_view'=>464,'month_view'=>34521,'year_view'=>768676,'status'=>0,'movie_id'=>4],
            ['episode_id'=>5,'episode_name'=>'Tập 5','url_first'=>'Ws-QlpSltr8','url_second'=>'Ws-QlpSltr8','view'=>60300,'week_view'=>345,'month_view'=>76565,'year_view'=>6754344,'status'=>1,'movie_id'=>1],

            // thêm mới
            ['episode_id'=>6,'episode_name'=>'Tập 1','url_first'=>'LDPVeaEsuaQ','url_second'=>'LDPVeaEsuaQ','view'=>115000,'week_view'=>1765,'month_view'=>64534,'year_view'=>546744,'status'=>1,'movie_id'=>11],
            ['episode_id'=>7,'episode_name'=>'Tập 2','url_first'=>'DEwSE_B_LmQ','url_second'=>'DEwSE_B_LmQ','view'=>88000,'week_view'=>908,'month_view'=>52342,'year_view'=>7685434,'status'=>1,'movie_id'=>11],
            ['episode_id'=>8,'episode_name'=>'Tập 3','url_first'=>'vvHX6wrKOkI','url_second'=>'vvHX6wrKOkI','view'=>75300,'week_view'=>1866,'month_view'=>3243,'year_view'=>537453,'status'=>1,'movie_id'=>11],
            ['episode_id'=>9,'episode_name'=>'Tập 4','url_first'=>'tZcmMK96Jdc','url_second'=>'tZcmMK96Jdc','view'=>123530,'week_view'=>3443,'month_view'=>2344,'year_view'=>3447678,'status'=>1,'movie_id'=>11],


            ['episode_id'=>10,'episode_name'=>'Tập 1','url_first'=>'it60_ZIbdzE','url_second'=>'uGHIilh3Whg','view'=>86860,'week_view'=>1543,'month_view'=>3412,'year_view'=>5353498,'status'=>1,'movie_id'=>12],
            ['episode_id'=>11,'episode_name'=>'Tập 2','url_first'=>'tThFiSfGEtg','url_second'=>'xajvh-S0HiM','view'=>76686,'week_view'=>1464,'month_view'=>1245,'year_view'=>456344,'status'=>1,'movie_id'=>12],
            ['episode_id'=>12,'episode_name'=>'Tập 3','url_first'=>'qUoVdg9DLoc','url_second'=>'lz5AXZ1QFj0','view'=>44554,'week_view'=>1077,'month_view'=>1231,'year_view'=>567524,'status'=>1,'movie_id'=>12],
            ['episode_id'=>13,'episode_name'=>'Tập 4','url_first'=>'MqXZK2wihj0','url_second'=>'TpgAfxpqeoo','view'=>60400,'week_view'=>3443,'month_view'=>7897,'year_view'=>45645634,'status'=>1,'movie_id'=>12],
            ['episode_id'=>14,'episode_name'=>'Tập 5','url_first'=>'AO6khtUHHko','url_second'=>'AO6khtUHHko','view'=>63343,'week_view'=>657,'month_view'=>53453,'year_view'=>97889634,'status'=>1,'movie_id'=>12],
            ['episode_id'=>15,'episode_name'=>'Tập 6','url_first'=>'Vd8HYBLk5o4','url_second'=>'Vd8HYBLk5o4','view'=>12314,'week_view'=>432,'month_view'=>23445,'year_view'=>34534,'status'=>1,'movie_id'=>12],
            ['episode_id'=>16,'episode_name'=>'Tập 7','url_first'=>'0yiBoQ9OTS0','url_second'=>'0yiBoQ9OTS0','view'=>24242,'week_view'=>2344,'month_view'=>3455,'year_view'=>56754,'status'=>1,'movie_id'=>12],
            ['episode_id'=>17,'episode_name'=>'Tập 8','url_first'=>'EBPmAbN842c','url_second'=>'EBPmAbN842c','view'=>42522,'week_view'=>2122,'month_view'=>56432,'year_view'=>34535,'status'=>1,'movie_id'=>12],

            ['episode_id'=>26,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'week_view'=>4546,'month_view'=>56435,'year_view'=>653453,'status'=>1,'movie_id'=>13],
            ['episode_id'=>27,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'week_view'=>7896,'month_view'=>5342,'year_view'=>5346245,'status'=>1,'movie_id'=>13],
            ['episode_id'=>28,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'week_view'=>5465,'month_view'=>4234,'year_view'=>3346532,'status'=>1,'movie_id'=>13],
            ['episode_id'=>29,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'week_view'=>6546,'month_view'=>6575,'year_view'=>34673,'status'=>1,'movie_id'=>13],
            ['episode_id'=>30,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'week_view'=>2343,'month_view'=>35342,'year_view'=>365434,'status'=>1,'movie_id'=>13],
            ['episode_id'=>31,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'week_view'=>324,'month_view'=>23423,'year_view'=>457643,'status'=>1,'movie_id'=>13],
            ['episode_id'=>32,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'week_view'=>3242,'month_view'=>3454,'year_view'=>4567456,'status'=>1,'movie_id'=>13],
            ['episode_id'=>33,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'week_view'=>10760,'month_view'=>63432,'year_view'=>564564,'status'=>1,'movie_id'=>13],

            ['episode_id'=>34,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'week_view'=>4546,'month_view'=>56435,'year_view'=>3453434,'status'=>1,'movie_id'=>14],
            ['episode_id'=>35,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'week_view'=>7896,'month_view'=>5342,'year_view'=>436436,'status'=>1,'movie_id'=>14],
            ['episode_id'=>36,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'week_view'=>5465,'month_view'=>4234,'year_view'=>444432,'status'=>1,'movie_id'=>14],
            ['episode_id'=>37,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'week_view'=>6546,'month_view'=>6575,'year_view'=>4354666,'status'=>1,'movie_id'=>14],
            ['episode_id'=>38,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'week_view'=>2343,'month_view'=>35342,'year_view'=>3433434,'status'=>1,'movie_id'=>14],
            ['episode_id'=>39,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'week_view'=>324,'month_view'=>23423,'year_view'=>5454545,'status'=>1,'movie_id'=>14],
            ['episode_id'=>40,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'week_view'=>3242,'month_view'=>3454,'year_view'=>65876576,'status'=>1,'movie_id'=>14],
            ['episode_id'=>41,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'week_view'=>10760,'month_view'=>63432,'year_view'=>766767,'status'=>1,'movie_id'=>14],

            ['episode_id'=>42,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'week_view'=>4546,'month_view'=>56435,'year_view'=>5675673,'status'=>1,'movie_id'=>15],
            ['episode_id'=>43,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'week_view'=>7896,'month_view'=>5342,'year_view'=>353444,'status'=>1,'movie_id'=>15],
            ['episode_id'=>44,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'week_view'=>5465,'month_view'=>4234,'year_view'=>453453,'status'=>1,'movie_id'=>15],
            ['episode_id'=>45,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'week_view'=>6546,'month_view'=>6575,'year_view'=>4564564,'status'=>1,'movie_id'=>15],
            ['episode_id'=>46,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'week_view'=>2343,'month_view'=>35342,'year_view'=>564644,'status'=>1,'movie_id'=>15],
            ['episode_id'=>47,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'week_view'=>324,'month_view'=>23423,'year_view'=>2342342,'status'=>1,'movie_id'=>15],
            ['episode_id'=>48,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'week_view'=>3242,'month_view'=>3454,'year_view'=>5675218,'status'=>1,'movie_id'=>15],
            ['episode_id'=>49,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'week_view'=>10760,'month_view'=>63432,'year_view'=>4537812,'status'=>1,'movie_id'=>15],

            ['episode_id'=>18,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'week_view'=>4546,'month_view'=>56435,'year_view'=>6575643,'status'=>1,'movie_id'=>16],
            ['episode_id'=>19,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'week_view'=>7896,'month_view'=>5342,'year_view'=>546345,'status'=>1,'movie_id'=>16],
            ['episode_id'=>20,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'week_view'=>5465,'month_view'=>4234,'year_view'=>345632,'status'=>1,'movie_id'=>16],
            ['episode_id'=>21,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'week_view'=>6546,'month_view'=>6575,'year_view'=>345363,'status'=>1,'movie_id'=>16],
            ['episode_id'=>22,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'week_view'=>2343,'month_view'=>35342,'year_view'=>345345,'status'=>1,'movie_id'=>16],
            ['episode_id'=>23,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'week_view'=>324,'month_view'=>23423,'year_view'=>98089,'status'=>1,'movie_id'=>16],
            ['episode_id'=>24,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'week_view'=>3242,'month_view'=>3454,'year_view'=>867866,'status'=>1,'movie_id'=>16],
            ['episode_id'=>25,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'week_view'=>10760,'month_view'=>63432,'year_view'=>864356,'status'=>1,'movie_id'=>16],

            ['episode_id'=>50,'episode_name'=>'Tập 1','url_first'=>'K7IShf7ofsA','url_second'=>'K7IShf7ofsA','view'=>86860,'week_view'=>4546,'month_view'=>56435,'year_view'=>4538742,'status'=>1,'movie_id'=>17],
            ['episode_id'=>51,'episode_name'=>'Tập 2','url_first'=>'PG2IsSVRM4o','url_second'=>'PG2IsSVRM4o','view'=>76686,'week_view'=>7896,'month_view'=>5342,'year_view'=>8764521,'status'=>1,'movie_id'=>17],
            ['episode_id'=>52,'episode_name'=>'Tập 3','url_first'=>'D1aHSQy5IXs','url_second'=>'D1aHSQy5IXs','view'=>44554,'week_view'=>5465,'month_view'=>4234,'year_view'=>3243788,'status'=>1,'movie_id'=>17],
            ['episode_id'=>53,'episode_name'=>'Tập 4','url_first'=>'KrlUn9RGMWo','url_second'=>'KrlUn9RGMWo','view'=>60400,'week_view'=>6546,'month_view'=>6575,'year_view'=>888755,'status'=>1,'movie_id'=>17],
            ['episode_id'=>54,'episode_name'=>'Tập 5','url_first'=>'45Qy9Mg3owI','url_second'=>'45Qy9Mg3owI','view'=>63343,'week_view'=>2343,'month_view'=>35342,'year_view'=>4564385,'status'=>1,'movie_id'=>17],
            ['episode_id'=>55,'episode_name'=>'Tập 6','url_first'=>'SVLJVA9LMpc','url_second'=>'SVLJVA9LMpc','view'=>12314,'week_view'=>324,'month_view'=>23423,'year_view'=>5555445,'status'=>1,'movie_id'=>17],
            ['episode_id'=>56,'episode_name'=>'Tập 7','url_first'=>'DW2o-kc70hA','url_second'=>'DW2o-kc70hA','view'=>24242,'week_view'=>3242,'month_view'=>3454,'year_view'=>5438735,'status'=>1,'movie_id'=>17],
            ['episode_id'=>57,'episode_name'=>'Tập 8','url_first'=>'1wNqBPoWfDw','url_second'=>'1wNqBPoWfDw','view'=>42522,'week_view'=>10760,'month_view'=>63432,'year_view'=>45685442,'status'=>1,'movie_id'=>17],





        ]);
        //
    }
}
