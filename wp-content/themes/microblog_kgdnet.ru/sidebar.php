                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-xl-block col-xl-4 p-0">
            <section id="category">
                <div class="title__category">Категории блога:</div>
                <ul class="items__category">
                    <?php
                        $categories = get_categories();

                        foreach ($categories as $category):
                            ?>
                            <li class="item__category">&gt; [ <a href="/category/<?php echo $category->slug; ?>" class="link"><?php echo $category->name; ?></a> ]</li>
                            <?php
                        endforeach;
                    ?>
                </ul>
            </section>
        </div>
    </div>
</div>