<?php

    class HelpersFunction {

        private static $instance = null;

        public static function getInstance() {
            if ( !(self::$instance) instanceof self) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function awePagination( $totalPages = 0 ) {
            $big = 999999999;
            $currentPage = max(1, get_query_var('paged'));
            if ( $totalPages > 1 ) { ?>
                <div class="techwix-pagination">
                    <ul class="pagination justify-content-center">
                    <?php
                        $args = array(
                            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'    => 'page/%#%',
                            'total'     => $totalPages,
                            'current'   => $currentPage,
                            'prev_text' => __('<i class="fa fa-angle-left"></i>', "bookawesome"),
                            'next_text' => __('<i class="fa fa-angle-right"></i>', "bookawesome"),
                            'type'      => 'array',
                        );
                        $pages = paginate_links( $args );
                        if( is_array( $pages ) ) {
                            foreach ( $pages as $key => $page ) {
                                echo $page;
                            }
                        }
                    ?>
                    </ul>
                    </div>
            <?php }

        }
    }