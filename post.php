<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim autem cumque aperiam voluptates, accusantium suscipit quaerat fugiat ad minima totam assumenda perspiciatis itaque nam unde hic sit, fugit molestiae odio?
            Ducimus sit nostrum nobis, eius recusandae pariatur exercitationem assumenda voluptatem beatae delectus cupiditate esse provident, rem aliquam omnis optio quasi unde hic, itaque nesciunt. Sunt ea officia voluptatem quas maxime?
            Vero omnis illum suscipit ducimus fuga accusamus et sed, rerum voluptate consequuntur veritatis. In nisi vel tenetur accusamus error blanditiis eligendi, laudantium ratione quos nihil, rerum, ad alias quas totam!
            Similique voluptatem libero atque delectus. Impedit esse autem, ullam accusantium animi obcaecati, hic aperiam assumenda laborum iste quidem, quibusdam velit voluptatem aliquam reprehenderit eos eligendi rerum inventore neque voluptas maxime!
            Assumenda labore voluptate rem possimus, sunt, deserunt non soluta amet accusamus blanditiis nobis? Cum, perspiciatis corrupti? Doloribus suscipit vel tempora incidunt qui quibusdam, aspernatur possimus exercitationem cupiditate? Pariatur, mollitia! Illo!</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?=$category?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
 

<?php
    include_once("templates/footer.php")
?>