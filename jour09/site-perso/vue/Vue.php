<?php 


class Vue {

    public function displayInfosProjet($tableau)
    {
        foreach($tableau as $key => $value)
        {
            ?>
        <!-- <div class="cursor cursor--small"></div>
        <canvas class="cursor cursor--canvas" resize></canvas> -->
        
        <main>

            <section id="projet">
                <article class="contenu_projet">

                    <div class="screen">
                        <?php
                        for($i = 0 ; $i <= 2 ; $i++){
                            ?>
                        <div>
                            <img src="images/<?= $_GET['id']."-".$i;?>.jpg" alt="screenshoot">
                        </div>
                        <?php
                        }
                        ?>
                    </div>

                    <div class="description">
                        <button class="b_burger">
                            <span class="trait trait_1"></span>
                            <span class="trait trait_2"></span>
                        </button>
                        <h2> <?= $value['titre']; ?> </h2>
                        <h3> <?= $value['sous_titre'] ; ?></h3>
                        <p>
                           <?= $value['description'] ; ?>
                        </p>
                        <p> <?= $value['equipe'] ; ?> </p>
                        <form action="../projects/voyages/voyage.html">
                            <button> Visiter le site</button>
                        </form>
                    </div>

                </article>
            </section>

        </main>
        <?php
        }
    }

    // public function displayLink(){

    // }
}