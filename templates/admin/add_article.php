<?php
$this->title = "Ajouter un article";
?>
<?php
include '../templates/inc/baseAdmin.php';
?>
<br/>
<br/>
<br/>

<div class=" box col-xs-3 col-sm-3 col-md-12"> <!-- ajouter article -->

            <div>

                <form method="post" action="../public/index.php?route=addArticle">
                   <h3> <label for="article">Ajouter un BlogPost</label><br /><br/></h3>
                    <label for="title">Titre</label><br>
                    <input type="text" id="title" class="form-control" name="title" value="<?php
                    if(isset($post['title'])){
                        echo $post['title'];}
                    ?>"><br>
                    <!-- aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center' } -->
                    <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
                    <script>tinymce.init({
                            selector:'textarea' });
                    </script>



                    <label for="content">Contenu</label><br>
                    <textarea id="content" name="content"><?php if(isset($post['content'])){ echo $post['content']; } ?></textarea><br>
                    <label for="author">Auteur</label><br>
                    <input  class="form-control"type="text" id="author" name="author" value="<?php
                    if(isset($post['author'])){
                        echo $post['author'];}
                    ?>"><br><br/>
                    <input type="submit" value="Envoyer" id="submit" name="submit">
                </form>

            </div>
</div>
