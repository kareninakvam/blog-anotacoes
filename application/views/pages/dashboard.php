 <!---------- Corpo do Blog --------->
 <section>
            <div class="container">
                <div class="timeline-posts">
                <?php foreach ($posts as $post): ?>
                    <div class="post">
                    <div class = "edit-trash">
                            <h2><?= $post['title']?></h2>
                            <div class="edit" ><a href="http://localhost/projetos/CI/blog-anotacoes/posts/edit/<?= $post['id']?>"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                            <div class="trash" > <a href="http://localhost/projetos/CI/blog-anotacoes/posts/delete/<?= $post['id']?>"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                    </div>
                        <div class="date">
                            <?= $post['date']?>
                        </div>
                        <div class="post-text">
                            <?= $post['post']?>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>

                <!----------Informações adicionais e Welcome --------->
                <div class="info">
                    <div class="welcome">
                        <h3>WELCOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies vestibulum tellus, ac ullamcorper justo interdum elementum.</p>
                    </div>
                    
                    <div>
                        <img class="social-media" src="http://localhost/projetos/CI/blog-anotacoes/assets/img/icones.png" alt="Mídias Sociais">
                         <!-- A imagem com os ícones é provisória. Posteriormente vou alinhar ícones nesse espaço. -->
                    </div>           
                </div>
            </div>
        </section>
</body>
</html>