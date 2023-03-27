<?php
/**
 * Utilities
 *
 * @package Pure_Blog
 */

/**
 * Render attributes.
 *
 * @since 1.0.0
 *
 * @param array $attributes Attributes.
 * @param bool  $display Whether to display or not.
 */
function pure_blog_render_attr( $attributes, $display = true ) {
	if ( empty( $attributes ) ) {
		return;
	}

	$html = '';

	foreach ( $attributes as $name => $value ) {
		$esc_value = '';

		if ( 'class' === $name && is_array( $value ) ) {
			$value = join( ' ', array_unique( $value ) );
		}

		if ( false !== $value && 'href' === $name ) {
			$esc_value = esc_url( $value );
		} elseif ( false !== $value ) {
			$esc_value = esc_attr( $value );
		}

		if ( ! in_array( $name, array( 'class', 'id', 'title', 'style', 'name' ), true ) ) {
			$html .= false !== $value ? sprintf( ' %s="%s"', esc_html( $name ), $esc_value ) : esc_html( " {$name}" );
		} else {
			$html .= $value ? sprintf( ' %s="%s"', esc_html( $name ), $esc_value ) : '';
		}
	}

	if ( ! empty( $html ) && true === $display ) {
		echo $html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	} else {
		return $html;
	}
}
