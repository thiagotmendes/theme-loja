<?php

function print_produtos_e_filhos( $tax_name,$compareTax ) {
    $cats = get_terms( $tax_name, [ 'parent' => 0, 'hide_empty' => true ] );
    echo '<ul>';
    foreach ( $cats as $cat ):
        if ( ! $cat->slug != 'destaque' ) {
            ?>
            <li>
                <span class="elementos-cat li-span">
                    <a href="<?php echo get_term_link( $cat ); ?>">
                        <?php echo $cat->name; ?>
                    </a>
                </span>
                <?php render_children( $cat,$compareTax ); ?>
            </li>

        <?php
        }
    endforeach;
    echo '</ul>';
  }

  function render_children( $parent, $compareTax ) {
    $children = get_terms( $parent->taxonomy, [ 'parent' => $parent->term_id, 'hide_empty' => true ] );
    echo '<ul class="ul-submenu">';
    foreach ( $children as $kid ):
        ?>
        <?php if ($compareTax == $kid->name): ?>
          <?php $activate = "activate_Lateral" ?>
        <?php else: ?>
          <?php $activate = "" ?>
        <?php endif; ?>
        <li class="elementos-cat li-submenu <?php echo $activate ?>">
            <a href="<?php echo get_term_link( $kid ); ?>">
               <?php echo $kid->name; ?>
            </a>
        </li>
    <?php
    endforeach;
    echo '</ul>';
  }
