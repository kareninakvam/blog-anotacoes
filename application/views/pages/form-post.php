    <section>
        <!-------- Esse formulário será editado futuramente ------>
        
        <h2>Inclua seu novo post:</h2> <br><br>
        <?php if(isset($post)) : ?>
            <form action="http://localhost/projetos/CI/blog-anotacoes/posts/update/<?= $post['id'] ?>" method="post">
        <?php else : ?>
			<form action="http://localhost/projetos/CI/blog-anotacoes/posts/store" method="post">
		<?php endif; ?>

            <label for="name">Título:</label>
            <input type="text" name="title" value="<?= isset($post) ? $post["title"] : "" ?>"><br>

            <label for="date">Data:</label>
            <input type="date" name="date" ><br><br>

            <label for="post">Conteúdo:</label>
            <textarea name="post"><?= isset($post) ? $post["post"] : "" ?></textarea>

            <button type="submit">Enviar</button>




        </form>
    </section>
</body>
</html>