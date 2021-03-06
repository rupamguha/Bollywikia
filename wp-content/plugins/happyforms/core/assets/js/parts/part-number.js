( function( $, _, Backbone, api, settings ) {

	happyForms.classes.models.parts.number = happyForms.classes.models.Part.extend( {
		defaults: function() {
			return _.extend(
				{},
				settings.formParts.number.defaults,
				_.result( happyForms.classes.models.Part.prototype, 'defaults' ),
			);
		},
	} );

	happyForms.classes.views.parts.number = happyForms.classes.views.Part.extend( {
		template: '#happyforms-customize-number-template',

		events: _.extend( {}, happyForms.classes.views.Part.prototype.events, {
			'change [name=masked]': 'onMaskedChange',
		} ),

		initialize: function () {
			happyForms.classes.views.Part.prototype.initialize.apply( this, arguments );

			this.listenTo( this.model, 'change:confirmation_field', this.onConfirmationChange );
			this.listenTo( this.model, 'change:confirmation_field_label', this.onConfirmationLabelChange );
			this.listenTo( this.model, 'change:mask_numeric_thousands_delimiter', this.onThousandsDelimiterChange );
			this.listenTo( this.model, 'change:mask_numeric_decimal_mark', this.onDecimalMarkChange );
			this.listenTo( this.model, 'change:mask_numeric_prefix', this.onPrefixChange );
			this.listenTo( happyForms.form, 'save', this.onFormSave );
		},

		onConfirmationChange: function( e ) {
			$confirmationSettings = $( '.happyforms-nested-settings[data-trigger="confirmation_field"]', this.$el );

			if ( this.model.get( 'confirmation_field' ) ) {
				$confirmationSettings.show();
			} else {
				$confirmationSettings.hide();
			}

			var model = this.model;

			model.fetchHtml( function( response ) {
				var data = {
					id: model.get( 'id' ),
					html: response,
				};

				happyForms.previewSend( 'happyforms-form-part-refresh', data );
			} );
		},

		/**
		 * Toggle masked input configuration on `Mask this input` checkbox change.
		 *
		 * @since 1.0.0.
		 *
		 * @param {object} e JS event.
		 *
		 * @return void
		 */
		onMaskedChange: function(e) {
			var $input = $( e.target );
			var attribute = $input.data( 'bind' );
			var $maskWrapper = this.$el.find( '.happyforms-nested-settings[data-trigger="masked"]' );

			if ( $input.is( ':checked' ) ) {
				this.model.set( attribute, 1 );

				// show actual mask input
				$maskWrapper.show();
			} else {
				this.model.set( attribute, 0 );

				// empty mask input and hide
				$maskWrapper.hide();
			}

			var model = this.model;

			this.model.fetchHtml( function( response ) {
				var data = {
					id: model.get( 'id' ),
					html: response,
				};

				happyForms.previewSend( 'happyforms-form-part-refresh', data );
			} );
		},

		/**
		 * Send updated confirmation field label value to previewer.
		 *
		 * @since 1.0.0.
		 *
		 * @return void
		 */
		onConfirmationLabelChange: function () {
			var data = {
				id: this.model.get( 'id' ),
				callback: 'onNumberConfirmationLabelChangeCallback',
			};

			happyForms.previewSend( 'happyforms-part-dom-update', data );
		},

		onThousandsDelimiterChange: function() {
			var data = {
				id: this.model.get( 'id' ),
				callback: 'onNumberThousandsDelimiterChangeCallback',
			};

			happyForms.previewSend( 'happyforms-part-dom-update', data );
		},

		onDecimalMarkChange: function() {
			var data = {
				id: this.model.get( 'id' ),
				callback: 'onNumberDecimalMarkChangeCallback',
			};

			happyForms.previewSend( 'happyforms-part-dom-update', data );
		},

		onPrefixChange: function() {
			var data = {
				id: this.model.get( 'id' ),
				callback: 'onNumberPrefixChangeCallback',
			};

			happyForms.previewSend( 'happyforms-part-dom-update', data );
		},

		onFormSave: function( form ) {
			var part = _.findWhere( form.parts, { 
				id: this.model.get( 'id' ) 
			} );

			if ( ! part ) {
				return;
			}

			$( '[data-bind="min_value"]', this.$el ).val( part.min_value );
		},
	} );

	happyForms.previewer = _.extend( happyForms.previewer, {
		onNumberConfirmationLabelChangeCallback: function( id, html, options ) {
			var part = this.getPartModel( id );
			var $part = this.getPartElement( html );
			var $confirmationLabel = this.$( '.happyforms-part__label--confirmation .label', $part );

			$confirmationLabel.text( part.get('confirmation_field_label') );
		},

		onNumberThousandsDelimiterChangeCallback: function( id, html, options, $ ) {
			var part = this.getPartModel( id );
			var $part = this.getPartElement( html );

			$part.attr( 'data-thousands-delimiter', part.get( 'mask_numeric_thousands_delimiter' ) );
			$.fn.happyFormPart.call( $part, 'reinit' );
		},

		onNumberDecimalMarkChangeCallback: function( id, html, options, $ ) {
			var part = this.getPartModel( id );
			var $part = this.getPartElement( html );

			$part.attr( 'data-decimal-mark', part.get( 'mask_numeric_decimal_mark' ) );
			$.fn.happyFormPart.call( $part, 'reinit' );
		},

		onNumberPrefixChangeCallback: function( id, html, options, $ ) {
			var part = this.getPartModel( id );
			var $part = this.getPartElement( html );

			$part.attr( 'data-prefix', part.get( 'mask_numeric_prefix' ) );
			$.fn.happyFormPart.call( $part, 'reinit' );
		}
	} );

} ) ( jQuery, _, Backbone, wp.customize, _happyFormsSettings );
