<?php
/**
 * Created by PhpStorm.
 * User: ajax
 * Date: 02-16-15
 * Time: 01:54 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Article;

class ArticlesTableSeeder extends Seeder{
    public function run(){
        DB::table('articles')->delete();

        Article::create([
            'title'         => 'Fifth Article Seed',
            'user_id'       => 1,
            'body'          => 'Penatibus? Pulvinar a dignissim. Tempor pulvinar, est egestas urna magna vut ridiculus vel porta mus hac pellentesque in, natoque vel, natoque nisi augue velit? Dis nunc, sed enim mid et, nisi odio. Mid dictumst, adipiscing habitasse, odio ut amet, integer arcu ac. Turpis. Augue vel sociis nec dictumst sit porttitor nunc scelerisque lacus ac ac in rhoncus sit sit porta, lacus scelerisque eu magnis, nisi dignissim, ac cras magna ac pulvinar habitasse porttitor nunc magna, elementum integer phasellus, tincidunt augue, lectus aliquet massa magnis, proin massa augue eros aliquam ut, magna magna. Et placerat ac! Tempor? Sagittis mus nec, non nisi magna. Enim natoque auctor, nec phasellus odio dignissim tortor eros platea adipiscing augue, sed dis, facilisis hac ut pid.

Quis amet non penatibus quis nunc in odio velit aliquet urna tempor nisi magna elementum nec augue odio ac integer aenean turpis sed! Dapibus nunc ut, massa, aliquet a pulvinar augue. Eros tincidunt turpis egestas. Et sit elit risus. Risus lectus, nunc turpis. Risus! Nisi nec cum platea, ultrices? Mauris, cursus a dolor. Sociis! Elit ac lectus porta nisi lorem scelerisque ut dolor? Elit lectus a porttitor etiam, dis massa habitasse massa cursus porttitor, in quis augue, porttitor sociis, phasellus purus mid elementum! Enim augue tincidunt adipiscing? Pulvinar turpis tortor dictumst dictumst rhoncus amet magnis. Mauris etiam, lundium tempor nunc? Tincidunt! Cum est dapibus. Scelerisque porttitor ut. Duis duis turpis! Tortor nunc aliquam ut aliquam elit! Dignissim! Lectus pulvinar.',
            'slug'          => 'fifth-article-on-test',
            'published_at'  => Carbon::now(),
            'excerpt'       => 'Penatibus? Pulvinar a dignissim. Tempor pulvinar, est egestas urna magna vut ridiculus vel porta mus hac'
        ]);
        Article::create([
            'title'         => 'Forth Article Seed',
            'user_id'       => 1,
            'body'          => 'Mauris lectus. Dignissim vut proin, placerat, nunc habitasse! Mauris sociis placerat porta, magnis a rhoncus, augue, lectus porta elementum nec. Penatibus ultricies augue dolor adipiscing augue pulvinar ultrices? Sagittis porttitor nisi, et dictumst ac! Tincidunt urna, placerat elementum nisi, elit! Parturient parturient, mauris nunc ridiculus porta egestas aliquet, penatibus et non pulvinar nunc nisi, pid, integer tincidunt integer a magna mattis tincidunt pellentesque etiam? Mattis ac? Arcu? Phasellus ridiculus aliquam urna placerat dictumst in, in nisi, risus aenean. Amet massa, tempor augue ridiculus diam, et egestas tincidunt ac dolor elementum dis. Dis enim mattis urna pellentesque, et augue porttitor nec, sagittis massa pulvinar placerat rhoncus nec sit pulvinar, eu in, massa ultricies penatibus a etiam habitasse duis, arcu, augue urna.

In vel pellentesque sociis integer, et platea, turpis elementum aenean facilisis. Penatibus natoque nascetur magna, placerat et enim in, lundium a penatibus sed rhoncus! Sit lacus? Placerat egestas risus lacus ultrices sit eros velit porta? Duis egestas! Turpis pellentesque, amet lorem diam augue. Sit augue scelerisque pulvinar. Rhoncus dolor et, magnis lacus in egestas scelerisque nec turpis pellentesque egestas, est eros, dis cras lundium nascetur cum velit placerat risus, in vut enim enim. Augue, etiam duis diam, mid nunc, vel. Quis tincidunt sit nunc nisi cursus elementum! Dignissim scelerisque in odio scelerisque ridiculus magna duis turpis odio nec dapibus ultricies risus dictumst natoque, sit, tempor ac facilisis! Egestas habitasse vel amet odio sagittis! Augue porttitor amet pulvinar, elementum urna.',
            'slug'          => 'forth-article',
            'published_at'  => Carbon::now(),
            'excerpt'       => 'Mauris lectus. Dignissim vut proin, placerat, nunc habitasse! Mauris sociis placerat porta, magnis a rhoncus.'
        ]);

        Article::create([
            'title'         => 'Third Article Seed',
            'user_id'       => 1,
            'body'          => 'Sociis lacus, tincidunt? Dapibus dapibus dolor nisi proin. In etiam integer urna, sed! Vut nisi lacus ac, in! Proin adipiscing, magna montes in est, enim est porttitor urna. Ridiculus habitasse pid ac, lundium nisi ultricies, facilisis dignissim ac adipiscing et, placerat lundium vel placerat et in sit, mus! In amet pellentesque sit mid turpis? Aliquet nasc',
            'slug'          => 'third-article-file',
            'published_at'  => Carbon::now(),
            'excerpt'       => 'Sociis lacus, tincidunt? Dapibus dapibus dolor nisi proin.'
        ]);

        Article::create([
            'title'         => 'Secund Article File',
            'user_id'       => 1,
            'body'          => 'Porttitor placerat, purus magnis duis, in, amet ac placerat urna. Aliquet penatibus, ac egestas in, sed ac urna. Montes pid odio vel! Vut pellentesque, porttitor sed, nunc hac aliquam vel, lundium porta, nascetur penatibus turpis pid aliquam porttitor dictumst vel augue urna, tempor ultrices, risus amet lacus vel mattis et porttitor dignissim turpis nisi. In ac augue sociis integer quis dolor in et integer, et placerat',
            'slug'          => 'secund-article-file',
            'published_at'  => Carbon::now(),
            'excerpt'       => 'Porttitor placerat, purus magnis duis, in, amet ac placerat urna.'
        ]);


        //primero
        Article::create([
            'title'         => 'First Article File',
            'user_id'       => 1,
            'body'          => 'Urna! Amet dignissim odio. Montes adipiscing, a in, sed odio nascetur cras. Pulvinar enim ut sociis facilisis! Vel a turpis, rhoncus ut pid sit, dis natoque sit, mauris penatibus elit magnis ac? Sit integer augue, augue, urna risus? Sagittis ac! Est quis, enim amet est sed, ut, parturient? Auctor. Montes, proin integer risus tempor integer ultricies tincidunt nec nisi phasellus? Lorem adipiscing eros vel elit? Vel placerat scelerisque vel lacus sed eros, aliquam elementum natoque? Turpis aenean, non? Habitasse nunc, parturient. Hac aliquet magna lundium pulvinar arcu tristique porttitor tortor! Nascetur vut magna porta nec etiam, pulvinar magnis sed in lacus sagittis quis sit aliquam ac odio odio penatibus vel. Urna, aliquam et et. Eu ut cras ut adipiscing magna.

Dis, duis, tincidunt aenean! Eros lectus arcu, placerat, arcu. A lundium? Tempor et nunc et. Pid nunc, porta nec magna rhoncus in ultricies mid rhoncus? Magna enim! Massa pulvinar, lectus in phasellus, dictumst ut nunc mattis mid, tristique elit dolor nisi, rhoncus parturient cursus, placerat? Cras montes, lacus au',
            'slug'          => 'first-article-file',
            'published_at'  => Carbon::now(),
            'excerpt'       => 'Urna! Amet dignissim odio. Montes adipiscing, a in, sed odio nascetur cras. Pulvinar enim ut sociis facilisis!'
        ]);
    }
}