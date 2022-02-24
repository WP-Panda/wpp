/**
 * Convert jpeg or png into webp
 *
 * Convenience method for calling Stack::convert.
 *
 * @param string $source The image to convert (absolute,no backslashes)
 *                               Image must be jpeg or png.
 * @param string $destination Where to store the converted file (absolute path, no backslashes).
 * @param array $options (optional) Array of named options
 *                               The options are documented here:
 *                            https://github.com/rosell-dk/webp-convert/blob/master/docs/v2.0/converting/options.md
 * @param \WebPConvert\Loggers\BaseLogger $logger (optional)
 *
 * @return  void
 * @throws  \WebPConvert\Convert\Exceptions\ConversionFailedException   in case conversion fails
 */
public static function convert( $source, $destination, $options = [], $logger = null ) {
	if ( isset( $options['converter'] ) ) {
		$converter = $options['converter'];
		unset( $options['converter'] );
		$c = ConverterFactory::makeConverter( $converter, $source, $destination, $options, $logger );
		$c->doConvert();
	} else {
		Stack::convert( $source, $destination, $options, $logger );
	}
}