<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazine>
 */
class MagazineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'publisher_name' => $this->faker->randomElement(['A-R Editions, Inc.','ABKCO Music, Inc.','Activist Music LLC','Air Deluxe Music Group','Alcove Music Publications','Alea Publishing','Alexscar Music','Alfred Publishing Company','Allaire Music Publications','Alliance Publications, Inc.','Alpha Major','Alphonse Leduc-Robert King, Inc','Alry Publications','Amare Dromeha','Amazing Music World','American Composers Alliance','American Guild of English Handbell Ringers (AGEHR)','American Institute of Musicology','Amherst Early Music','AMSI (Art Masters Studios Inc.)','Anglo-American Music Publishers','Are-Gee-Bee Music, Inc.','Arsis Press','Art of Sound Music, LLC','Arte Tripharia','Artists in Ministry','Atlan-Dec Music Publishers','Augsburg Fortress Publishers','Avatar Publishing Group, LLC','Ayotte Custom Music','Azevedo Music','Aztigram Music Ltd.','Baby Munsta','Baddmoma’s Music','Baerenreiter Music Corporation','Barton Music & Affiliates','Barton Rhodes Press','Beckenhorst Press, Inc.','Beckie Publishing Co., Inc.','Bekool Music','Bell Tower Publishing','Belmont Music Publishers','Belwin-Mills Publishing Corp.','Benny Davis Music','Berklee Media','Big Fish Music','Big Round Music','Bill Edwards Publishing','Birmingham Brown Songs','Bixio Music Group Ltd.','BJ Records','Black Cinderella Productions','Bluegrass & Cadillacs Record & Publishing, Co.','Bluewater Music Corporation','BMG Music Publishing, Los Angeles','BMG Music Publishing, Nashville','BMX Entertainment Inc.','Bob-A-Lew Music','Boelke-Bomart/Mobart Music Publishers','Bonded Music','Boosey & Hawkes, Inc.','Bouie Publishing Company','Brass Press','BrassHeart Music','Breitkopf & Haertel','Brentwood-Benson Music Publishing, Inc.','Bridgeport Music','Bright Tunes Music Corp.','Bring It Back Home Music','Brockman Music','Brodt Music Company','Bronx Flash Music','Broude Brothers Limited','Brown Wright Productions','Brumley Music','Buckhorn Music Publishing, Inc.','Buckthorn Music Press','Butterfly Fuschia Music Co. (BFMC)','C. Alan Publications','C. Harvey Publications','C.F. Peters Corp.','C.L. Barnhouse Company','Cafaro Sound','Calabrese Brothers Music, LLC','Cambiata Press','Canorous Music Publishing','Capitoal Chrisitan Music Group','Carl Fischer, LLC','Carlin America, Inc.','Celebrations Unlimited Music Publishers','Centerstream Publishing LLC','Central Juvenile Music','Charles Colin Publications','Chartbound Music Publications Ltd.','Chesky Productions Inc.','Choristers Guild','Church Publishing Inc.','CITW Productions','Clarus Music, Ltd.','Classical Vocal Reprints','Cliff Starkey Music','Colla Voce Music, Inc','Colter’s Corral Music','Common Mode, Inc.','Concord Theatricals','Concordia Publishing House','Consort Press','Cool Beans Music, Inc.','Copperfield Music Group','Covina High Music','CPP/Belwin Music','Curnow Music Press, Inc.','Dantalian, Inc.','Darcey Press','Dasystem','David E. Smith Publications','David Romeo Music','David Rose Publishing Co.','Dayna Paryss Entertainment Inc.','de Walden Music International, Inc.','Deep Listening Publications','Def Mix Music','DeFeis Music','Define Something In Nothing Music']),
        ];
    }
}
