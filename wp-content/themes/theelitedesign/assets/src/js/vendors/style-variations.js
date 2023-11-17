const requestOptions = {
	method: 'GET',
	redirect: 'follow',
};
fetch( '/wp-json/v1/theme-json/style-variations?key=L4DhGjeS6e6nOoRwbWuiYRjKi6tWHRxNKp7ui0L2', requestOptions )
	.then( ( response ) => response.text() )
	.then( ( result ) => {
		const data = JSON.parse( result );
		for ( const key in data ) {
			const element = data[ key ];
			for ( const keyInner in element ) {
				const el = element[ keyInner ];
				wp.blocks.registerBlockStyle( key, {
					name: keyInner,
					label: el.label,
				} );
			}
		}
	} )
	.catch( ( error ) => console.log( 'error', error ) );
