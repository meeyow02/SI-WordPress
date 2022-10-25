<?php
/**
 * Block Information & Attributes File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

$border_attribute     = UAGB_Block_Helper::uag_generate_border_attribute( 'container' );
$default_width        = UAGB_Admin_Helper::get_global_content_width();
$default_padding      = UAGB_Admin_Helper::get_admin_settings_option( 'uag_container_global_padding', '' );
$default_elements_gap = UAGB_Admin_Helper::get_admin_settings_option( 'uag_container_global_elements_gap', 20 );

return array_merge(
	array(
		'block_id'                          => '',
		'widthDesktop'                      => 100,
		'widthTablet'                       => '',
		'widthMobile'                       => 100,
		'widthType'                         => '%',
		'minHeightDesktop'                  => '',
		'minHeightTablet'                   => '',
		'minHeightMobile'                   => '',
		'minHeightType'                     => 'px',
		'minHeightTypeTablet'               => 'px',
		'minHeightTypeMobile'               => 'px',
		'directionDesktop'                  => 'column',
		'directionTablet'                   => '',
		'directionMobile'                   => '',
		'alignItemsDesktop'                 => 'center',
		'alignItemsTablet'                  => '',
		'alignItemsMobile'                  => '',
		'justifyContentDesktop'             => 'center',
		'justifyContentTablet'              => '',
		'justifyContentMobile'              => '',
		'wrapDesktop'                       => 'nowrap',
		'wrapTablet'                        => '',
		'wrapMobile'                        => 'wrap',
		'alignContentDesktop'               => '',
		'alignContentTablet'                => '',
		'alignContentMobile'                => '',
		'backgroundType'                    => 'none',
		'backgroundImageDesktop'            => '',
		'backgroundImageTablet'             => '',
		'backgroundImageMobile'             => '',
		'backgroundPositionDesktop'         => array(
			'x' => 0.5,
			'y' => 0.5,
		),
		'backgroundPositionTablet'          => '',
		'backgroundPositionMobile'          => '',
		'backgroundSizeDesktop'             => 'cover',
		'backgroundSizeTablet'              => '',
		'backgroundSizeMobile'              => '',
		'backgroundRepeatDesktop'           => 'no-repeat',
		'backgroundRepeatTablet'            => '',
		'backgroundRepeatMobile'            => '',
		'backgroundAttachmentDesktop'       => 'scroll',
		'backgroundAttachmentTablet'        => '',
		'backgroundAttachmentMobile'        => '',
		'backgroundColor'                   => '',
		'backgroundOpacity'                 => '',
		'backgroundImageColor'              => '#FFFFFF75',
		'gradientValue'                     => 'linear-gradient(90deg, rgba(6, 147, 227, 0.5) 0%, rgba(155, 81, 224, 0.5) 100%)',
		'boxShadowColor'                    => '#00000070',
		'boxShadowHOffset'                  => 0,
		'boxShadowVOffset'                  => 0,
		'boxShadowBlur'                     => '',
		'boxShadowSpread'                   => '',
		'boxShadowPosition'                 => 'outset',
		'boxShadowColorHover'               => '',
		'boxShadowHOffsetHover'             => 0,
		'boxShadowVOffsetHover'             => 0,
		'boxShadowBlurHover'                => '',
		'boxShadowSpreadHover'              => '',
		'boxShadowPositionHover'            => 'outset',

		'topPaddingDesktop'                 => $default_padding,
		'bottomPaddingDesktop'              => $default_padding,
		'leftPaddingDesktop'                => $default_padding,
		'rightPaddingDesktop'               => $default_padding,
		'topPaddingTablet'                  => $default_padding,
		'bottomPaddingTablet'               => $default_padding,
		'leftPaddingTablet'                 => $default_padding,
		'rightPaddingTablet'                => $default_padding,
		'topPaddingMobile'                  => $default_padding,
		'bottomPaddingMobile'               => $default_padding,
		'leftPaddingMobile'                 => $default_padding,
		'rightPaddingMobile'                => $default_padding,
		'paddingType'                       => 'px',
		'paddingTypeTablet'                 => 'px',
		'paddingTypeMobile'                 => 'px',
		'paddingLink'                       => true,
		'topMarginDesktop'                  => '',
		'bottomMarginDesktop'               => '',
		'leftMarginDesktop'                 => '',
		'rightMarginDesktop'                => '',
		'topMarginTablet'                   => '',
		'bottomMarginTablet'                => '',
		'leftMarginTablet'                  => '',
		'rightMarginTablet'                 => '',
		'topMarginMobile'                   => '',
		'bottomMarginMobile'                => '',
		'leftMarginMobile'                  => '',
		'rightMarginMobile'                 => '',
		'marginType'                        => 'px',
		'marginTypeTablet'                  => 'px',
		'marginTypeMobile'                  => 'px',
		'marginLink'                        => true,
		'rowGapDesktop'                     => $default_elements_gap,
		'rowGapTablet'                      => '',
		'rowGapMobile'                      => '',
		'rowGapType'                        => 'px',
		'rowGapTypeTablet'                  => 'px',
		'rowGapTypeMobile'                  => 'px',
		'columnGapDesktop'                  => $default_elements_gap,
		'columnGapTablet'                   => '',
		'columnGapMobile'                   => '',
		'columnGapType'                     => 'px',
		'columnGapTypeTablet'               => 'px',
		'columnGapTypeMobile'               => 'px',
		'contentWidth'                      => 'alignfull',
		'innerContentWidth'                 => 'alignwide',
		'innerContentCustomWidthDesktop'    => $default_width,
		'innerContentCustomWidthTablet'     => 1024,
		'innerContentCustomWidthMobile'     => 767,
		'innerContentCustomWidthType'       => 'px',
		'innerContentCustomWidthTypeTablet' => 'px',
		'innerContentCustomWidthTypeMobile' => 'px',
		'bottomType'                        => 'none',
		'bottomColor'                       => '#333',
		'bottomHeight'                      => '',
		'bottomHeightTablet'                => '',
		'bottomHeightMobile'                => '',
		'bottomWidth'                       => 100,
		'topType'                           => 'none',
		'topColor'                          => '#333',
		'topHeight'                         => '',
		'topHeightTablet'                   => '',
		'topHeightMobile'                   => '',
		'topWidth'                          => 100,
		'topFlip'                           => false,
		'bottomFlip'                        => false,
		'topContentAboveShape'              => false,
		'bottomContentAboveShape'           => false,
		'backgroundCustomSizeDesktop'       => 100,
		'backgroundCustomSizeTablet'        => '',
		'backgroundCustomSizeMobile'        => '',
		'backgroundCustomSizeType'          => '%',
		'overlayType'                       => 'none',
		'customPosition'                    => 'default',
		'xPositionDesktop'                  => '',
		'xPositionTablet'                   => '',
		'xPositionMobile'                   => '',
		'xPositionType'                     => 'px',
		'xPositionTypeTablet'               => 'px',
		'xPositionTypeMobile'               => 'px',
		'yPositionDesktop'                  => '',
		'yPositionTablet'                   => '',
		'yPositionMobile'                   => '',
		'yPositionType'                     => 'px',
		'yPositionTypeTablet'               => 'px',
		'yPositionTypeMobile'               => 'px',
		'backgroundVideoColor'              => '#FFFFFF75',
		'backgroundVideo'                   => '',
		'backgroundVideoOpacity'            => 0.5,
		'topInvert'                         => false,
		'bottomInvert'                      => false,
		'textColor'                         => 'inherit',
		'linkColor'                         => '',
		'linkHoverColor'                    => '',
		'isBlockRootParent'                 => false,
		'widthTypeTablet'                   => '%',
		'widthTypeMobile'                   => '%',
		'overflow'                          => 'visible',
	),
	$border_attribute
);