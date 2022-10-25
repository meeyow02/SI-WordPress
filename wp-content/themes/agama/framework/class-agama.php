<?php 

// Prevent direct access to the file
if( ! defined( 'ABSPATH' ) ) {
    exit;
}

/*
/**
 * Agama Class
 *
 * @since 1.1.1
 */
if( ! class_exists( 'Agama' ) ) {
	class Agama {
		
		/**
		 * Class Constructor
		 *
		 * @since 1.1.1
		 */
		function __construct() {}
        
        /**
         * Main Wrapper Class
         *
         * Output main wrapper class.
         *
         * @since 1.4.4
         * @access public
         * @return string
         */
        static function main_wrapper_class() {
            $layout = esc_attr( get_theme_mod( 'agama_layout_style', 'fullwidth' ) );
            switch( $layout ) {
                case 'boxed' :
                    $class = 'tv-container tv-p-0';
                break;
                case 'fullwidth' :
                    $class = 'is-full-width';
                break;
            }
            echo esc_attr( $class );
        }
		
		/**
		 * Header Style Class
		 *
		 * @since 1.2.0
		 */
		static function header_class() {
			$header     = esc_attr( get_theme_mod( 'agama_header_style', 'transparent' ) );
            $desktop    = esc_url( get_theme_mod( 'agama_logo', '' ) );
            $tablet     = esc_url( get_theme_mod( 'agama_tablet_logo', '' ) );
            $mobile     = esc_url( get_theme_mod( 'agama_mobile_logo', '' ) );
            $device     = array();
            
            if( ! empty( $desktop ) ) {
                $device[] = 'has_desktop';
            }
            
            if( ! empty( $tablet ) ) {
                $device[] = 'has_tablet';
            }
            
            if( ! empty( $mobile ) ) {
                $device[] = 'has_mobile';
            }
            
			switch( $header ):
				case 'transparent':
					 $class = 'header_v1 ' . implode( ' ', $device );
				break;
				case 'default':
					 $class = 'header_v2 ' . implode( ' ', $device );
				break;
				case 'sticky':
					 $class = 'header_v3 ' . implode( ' ', $device );
				break;
			endswitch;
			echo $class;
		}
		
		/**
		 * Bootstrap Content Wrapper Class
		 *
		 * @since 1.1.7
		 */
		static function bs_class() {
            if ( is_active_sidebar( 'sidebar-1' ) ) {
                
                $class[] = 'tv-col-md-9';
                
                if ( 'right' == agama_sidebar_position() ) {
                    $class[] = 'tv-order-1';
                } else if ( 'left' == agama_sidebar_position() ) {
                    $class[] = 'tv-order-2';
                }
                
            } else {
                $class[] = 'tv-col-md-12';
            }
            
			return implode( ' ', $class );
		}
		
		/**
		 * Render Menu Content
		 *
		 * @since 1.1.1
		 */
		public static function menu( $location = false, $class = false ) {
			
			// If location not set
			if( ! $location ) {
				return;
            }
			
			$args = array(
				'theme_location' => $location,
				'menu_class'     => $class,
				'container'      => false,
				'echo'           => '0'
			);
			
			$menu = wp_nav_menu( $args );
			
			return $menu;
		}
		
		/**
		 * Social Icons
         *
         * Display social icons.
		 *
         * @param string $tip_position (optional) The position of tooltip.
         * @param string $style (optional) The social icons style name.
         *
		 * @since 1.1.1
		 * @since 1.4.2 Updated the code.
         * @access public
         * @return mixed
		 */
		public static function social_icons( $tip_position = null, $style = null ) {
			$settings = get_theme_mod( 'agama_social_icons', [
                [
                    'target'    => '',
                    'icon'      => 'rss',
                    'url'       => esc_url_raw( get_bloginfo('rss2_url') )
                ] 
            ]);
            if( $settings && is_array( $settings ) ) {
                if( 'animated' == $style ) echo '<ul>';
                foreach( $settings as $setting ) {
                    if( 'animated' == $style ) echo '<li>';
                        
                        // Format VK and RSS icon names.
                        if( 'rss' == $setting['icon'] || 'vk' == $setting['icon'] ) {
                            $title = strtoupper( $setting['icon'] );
                        } 
                        else // Format StackOverflow icon name.
                        if( 'stack-overflow' == $setting['icon'] ) {
                            $title = str_replace( '-', '', $setting['icon'] );
                            $title = ucfirst( $title );
                        } else {
                            $title = ucfirst( $setting['icon'] );
                        }
                    
                        // Format url data.
                        $data  = 'title="'. esc_html( $title ) .'"';
                        if( 'animated' !== $style ) {
                            $data .= ' data-toggle="tooltip"';
                            if( $tip_position ) {
                                $data .= ' data-placement="'. esc_attr( $tip_position ) .'"';
                            }
                        }
                    
                        // Format url target.
                        if( $setting['target'] ) {
                            $target = 'target="_blank"';
                        } else {
                            $target = 'target="_self"';
                        }
                    
                        // Format url class name.
                        'animated' == $style ? $class = 'tv-' . strtolower( $setting['icon'] ) : $class = 'social-icons ' . strtolower( $setting['icon'] );
                    
                        // Format fontawesome class name.
                        $fontawesome = 'fa-' . strtolower( $setting['icon'] );
                    
                        // Format fontawesome email icon class.
                        if( 'email' == $setting['icon'] ) {
                            $fontawesome = 'fa-at';
                        }
                        
                        // Format email url.
                        if( 'email' == $setting['icon'] ) {
                            $setting['url'] = 'mailto:'. esc_attr( $setting['url'] );
                        }
                        else
                        // Format phone url.
                        if( 'phone' == $setting['icon'] ) {
                            $setting['url'] = 'tel:'. esc_attr( $setting['url'] );
                        }
                        else
                        // Format skype url.
                        if( 'skype' == $setting['icon'] ) {
                            $setting['url'] = 'skype:'. esc_attr( $setting['url'] ) .'?call';
                        } else { // Escape all other urls.
                            $setting['url'] = esc_url( $setting['url'] );
                        }
                    
                        echo '<a href="'. $setting['url'] .'" class="'. esc_attr( $class ) .'" ' . $target . $data .'>';
                            if( 'animated' == $style ) echo '<span class="tv-icon"><i class="fa '. esc_attr( $fontawesome ) .'"></i></span>';
                            if( 'animated' == $style ) echo '<span class="tv-text">'. esc_html( $title ) .'</span>';
                        echo '</a>';
                    
                    if( 'animated' == $style ) echo '</li>';
                }
                if( 'animated' == $style ) echo '</ul>';
            }
		}
		
		/**
		 * Get Post Format
		 *
		 * @since 1.1.1
		 */
		public static function post_format() {
			$post_format = get_post_format();
			
			switch( $post_format ) {

				case 'aside':
					$icon = '<i class="fa fa-outdent"></i>';
				break;
				
				case 'chat':
					$icon = '<i class="fa fa-wechat"></i>';
				break;
				
				case 'gallery':
					$icon = '<i class="fa fa-photo"></i>';
				break;
				
				case 'link':
					$icon = '<i class="fa fa-link"></i>';
				break;
				
				case 'image':
					$icon = '<i class="fa fa-image"></i>';
				break;
				
				case 'quote':
					$icon = '<i class="fa fa-quote-left"></i>';
				break;
				
				case 'status':
					$icon = '<i class="fa fa-check-circle"></i>';
				break;
				
				case 'video':
					$icon = '<i class="fa fa-video-camera"></i>';
				break;
				
				case 'audio':
					$icon = '<i class="fa fa-volume-up"></i>';
				break;
				
				default: $icon = '<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" fill="#000000" version="1.1" x="0px" y="0px" viewBox="0 0 100 125"><path d="M 12.125 16 C 8.7664674 16 6 18.766467 6 22.125 L 6 77.875 C 6 81.233533 8.7664674 84 12.125 84 L 67.875 84 C 71.233533 84 74 81.233533 74 77.875 L 74 59.84375 L 93.40625 40.46875 A 2.0001999 2.0001999 0 0 0 93.40625 37.65625 L 84.34375 28.59375 A 2.0001999 2.0001999 0 0 0 82.71875 28 A 2.0001999 2.0001999 0 0 0 81.53125 28.59375 L 74 36.15625 L 74 22.125 C 74 18.766467 71.233533 16 67.875 16 L 12.125 16 z M 12.125 20 L 67.875 20 C 69.091687 20 70 20.908313 70 22.125 L 70 40.15625 L 52.59375 57.59375 A 2.0001999 2.0001999 0 0 0 52 59 L 52 68 A 2.0001999 2.0001999 0 0 0 54 70 L 63 70 A 2.0001999 2.0001999 0 0 0 64.40625 69.40625 L 70 63.8125 L 70 77.875 C 70 79.091687 69.091687 80 67.875 80 L 12.125 80 C 10.908313 80 10 79.091687 10 77.875 L 10 22.125 C 10 20.908313 10.908313 20 12.125 20 z M 19.8125 30 A 2.0021961 2.0021961 0 1 0 20 34 L 60 34 A 2.0001999 2.0001999 0 1 0 60 30 L 20 30 A 2.0001999 2.0001999 0 0 0 19.8125 30 z M 82.9375 32.8125 L 89.1875 39.0625 L 85.53125 42.71875 L 79.28125 36.46875 L 82.9375 32.8125 z M 76.46875 39.28125 L 82.71875 45.53125 L 62.1875 66 L 56 66 L 56 59.8125 L 76.46875 39.28125 z M 19.8125 42 A 2.0021961 2.0021961 0 1 0 20 46 L 60 46 A 2.0001999 2.0001999 0 1 0 60 42 L 20 42 A 2.0001999 2.0001999 0 0 0 19.8125 42 z M 19.8125 54 A 2.0021961 2.0021961 0 1 0 20 58 L 46.15625 58 A 2.0001999 2.0001999 0 1 0 46.15625 54 L 20 54 A 2.0001999 2.0001999 0 0 0 19.8125 54 z M 19.8125 66 A 2.0021961 2.0021961 0 1 0 20 70 L 46 70 A 2.0001999 2.0001999 0 1 0 46 66 L 20 66 A 2.0001999 2.0001999 0 0 0 19.8125 66 z "></path></svg>';
				
			}
			
			return $icon;
		}
		
		/**
		 * Count Comments
		 *
		 * @since 1.1.1
		 */
		public static function comments_count() {
			$comments = 0;
			
			if( comments_open() ) {
				$comments = sprintf('<a href="%s">%s</a>', get_comments_link(), get_comments_number() . __( ' comments', 'agama' ) );
			}
			
			return $comments;
		}
		
		/**
		 * Next | Previous - Post Links
		 *
		 * @since 1.0.0
		 */
		public static function post_prev_next_links() {
			if( get_previous_post_link() || get_next_post_link() ) { ?>
				<!-- Posts Navigation -->
				<nav class="nav-single">
					<h3 class="screen-reader-text"><?php _e( 'Post navigation', 'agama' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'agama' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'agama' ) . '</span>' ); ?></span>
				</nav><!-- Post Navigation End -->
			<?php
			}
		}
		
		/**
		 * Render About Author on Single Posts
		 *
		 * @since 1.1.1
		 */
		public static function about_author() { ?>
			<?php 
			if ( 
				 is_singular() && 
				 get_the_author_meta( 'description' ) && 
			     get_theme_mod( 'agama_blog_about_author', true ) 
				) : ?>
				
			<div class="author-info">
				<div class="author-avatar">
					<?php
					/** This filter is documented in author.php */
					$author_bio_avatar_size = apply_filters( 'agama_author_bio_avatar_size', 68 );
					echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
					?>
				</div>
				<div class="author-description">
					<h2><?php printf( __( 'About %s', 'agama' ), get_the_author() ); ?></h2>
					<p><?php the_author_meta( 'description' ); ?></p>
					<div class="author-link">
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
							<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'agama' ), get_the_author() ); ?>
						</a>
					</div>
				</div>
			</div>
			
		<?php endif; ?>
		<?php
		}
	}
	new Agama;
}

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
