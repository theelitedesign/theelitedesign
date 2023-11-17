( function( ) {
	if ( window.acf ) {
		const EqualToButtonGroup = window.acf.Condition.extend( {
			type: 'EqualToButtonGroup',
			operator: '==',
			label: 'Value is equal to',
			fieldTypes: [ 'design_options' ],
			match( rule, field ) {
				return isEqualTo( rule.value, field.$el.find( '.acf-design-option:checked' ).val() );
			},
			choices( fieldObject ) {
				const choices = [];
				const items = fieldObject.$el.find( '.gallery-values' ).find( 'span' );
				items.each( function( i, v ) {
					choices.push( {
						id: jQuery( v ).text(),
						text: jQuery( v ).text(),
					} );
				} );
				return choices;
			},
		} );
		const NotEqualToButtonGroup = window.acf.Condition.extend( {
			type: 'NotEqualToButtonGroup',
			operator: '!=',
			label: 'Value is not equal to',
			fieldTypes: [ 'design_options' ],
			match( rule, field ) {
				return isEqualTo( rule.value, field.$el.find( '.acf-design-option:checked' ).val() );
			},
			choices( fieldObject ) {
				const choices = [];
				const items = fieldObject.$el.find( '.gallery-values' ).find( 'span' );
				items.each( function( i, v ) {
					choices.push( {
						id: jQuery( v ).text(),
						text: jQuery( v ).text(),
					} );
				} );
				return choices;
			},
		} );
		window.acf.registerConditionType( EqualToButtonGroup );
		window.acf.registerConditionType( NotEqualToButtonGroup );

		const designOptionsField = window.acf.Field.extend( { type: 'design_options' } );
		window.acf.registerFieldType( designOptionsField );
		window.acf.registerConditionForFieldType( 'EqualToButtonGroup', 'design_options' );
		window.acf.registerConditionForFieldType( 'NotEqualToButtonGroup', 'design_options' );
		const parseString = function( val ) {
			return val ? '' + val : '';
		};
		const isEqualTo = function( v1, v2 ) {
			return parseString( v1 ).toLowerCase() === parseString( v2 ).toLowerCase();
		};
		jQuery( document ).on( 'click', '.acf-option-label', function() {
			jQuery( '.acf-option-label' ).removeClass( 'selected' );
			jQuery( this ).find( 'input' ).prop( 'checked', true );
			jQuery( this ).parents( '.acf-field-design-options' ).trigger( 'change' );
			jQuery( this ).addClass( 'selected' );
		} );
		window.acf.addAction(
			'render_block_preview',
			function( $block ) {
				jQuery( $block ).attr( 'style', '' );
			}
		);
	}
}( ) );
