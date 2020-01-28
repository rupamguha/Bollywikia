<script type="text/template" id="customize-happyforms-multi-line-text-template">
	<?php include( happyforms_get_core_folder() . '/templates/customize-form-part-header.php' ); ?>
	<p>
		<label for="<%= instance.id %>_title"><?php _e( 'Label', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
		<input type="text" id="<%= instance.id %>_title" class="widefat title" value="<%= instance.label %>" data-bind="label" />
	</p>
	<p>
		<label for="<%= instance.id %>_label_placement"><?php _e( 'Label display', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
		<select id="<%= instance.id %>_label_placement" data-bind="label_placement">
			<option value="above"<%= (instance.label_placement == 'above') ? ' selected' : '' %>><?php _e( 'Above', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="below"<%= (instance.label_placement == 'below') ? ' selected' : '' %>><?php _e( 'Below', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="left"<%= (instance.label_placement == 'left') ? ' selected' : '' %>><?php _e( 'Left', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="inside"<%= (instance.label_placement == 'inside') ? ' selected' : '' %>><?php _e( 'Inside', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="hidden"<%= (instance.label_placement == 'hidden') ? ' selected' : '' %>><?php _e( 'Hidden', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
		</select>
	</p>
	<p>
		<label for="<%= instance.id %>_description"><?php _e( 'Description', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
		<textarea id="<%= instance.id %>_description" data-bind="description"><%= instance.description %></textarea>
	</p>
	<p class="happyforms-description-options" style="display: <%= (instance.description != '') ? 'block' : 'none' %>">
		<label for="<%= instance.id %>_description_mode"><?php _e( 'Description appearance', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
		<select id="<%= instance.id %>_description_mode" data-bind="description_mode">
			<option value=""><?php _e( 'Standard', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="focus-reveal"<%= (instance.description_mode == 'focus-reveal') ? ' selected' : '' %>><?php _e( 'Reveal on focus', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			<option value="tooltip"<%= (instance.description_mode == 'tooltip' || instance.tooltip_description ) ? ' selected' : '' %>><?php _e( 'Tooltip', HAPPYFORMS_TEXT_DOMAIN ); ?></option>
		</select>
	</p>
	<p class="happyforms-placeholder-option" style="display: <%= ( 'as_placeholder' !== instance.label_placement ) ? 'block' : 'none' %>">
		<label for="<%= instance.id %>_placeholder"><?php _e( 'Placeholder', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
		<input type="text" id="<%= instance.id %>_placeholder" class="widefat title" value="<%= instance.placeholder %>" data-bind="placeholder" />
	</p>

	<?php do_action( 'happyforms_part_customize_multi_line_text_before_options' ); ?>

	<p>
		<label>
			<input type="checkbox" class="checkbox" value="1" <% if ( instance.required ) { %>checked="checked"<% } %> data-bind="required" /> <?php _e( 'This is required', HAPPYFORMS_TEXT_DOMAIN ); ?>
		</label>
	</p>

	<?php do_action( 'happyforms_part_customize_multi_line_text_after_options' ); ?>

	<div class="happyforms-part-advanced-settings-wrap">
		<?php do_action( 'happyforms_part_customize_multi_line_text_before_advanced_options' ); ?>

		<p>
			<label>
				<input type="checkbox" class="checkbox" value="1" <% if ( instance.limit_input ) { %>checked="checked"<% } %> data-bind="limit_input" /> <?php _e( 'Limit words/characters', HAPPYFORMS_TEXT_DOMAIN ); ?>
			</label>
		</p>

		<div class="happyforms-nested-settings character-limit-settings" <% if ( ! instance.limit_input ) { %>style="display: none;"<% } %>>
			<p>
				<label for="<%= instance.id %>_character_limit"><?php _e( 'Amount', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
				<input type="number" id="<%= instance.id %>_character_limit" class="widefat title" step="1" min="1" value="<%= instance.character_limit %>" data-bind="character_limit" />
			</p>
			<select id="<%= instance.id %>_character_limit_mode" data-bind="character_limit_mode">
				<option value="word_max"<%= (instance.character_limit_mode == 'word_max') ? ' selected' : '' %>><?php _e( 'Words (max)',  HAPPYFORMS_TEXT_DOMAIN ); ?></option>
				<option value="word_min"<%= (instance.character_limit_mode == 'word_min') ? ' selected' : '' %>><?php _e( 'Words (min)',  HAPPYFORMS_TEXT_DOMAIN ); ?></option>
				<option value="character_max"<%= (instance.character_limit_mode == 'character_max') ? ' selected' : '' %>><?php _e( 'Characters (max)',  HAPPYFORMS_TEXT_DOMAIN ); ?></option>
				<option value="character_min"<%= (instance.character_limit_mode == 'character_min') ? ' selected' : '' %>><?php _e( 'Characters (min)',  HAPPYFORMS_TEXT_DOMAIN ); ?></option>
			</select>
		</div>

		<?php happyforms_customize_part_width_control(); ?>

		<?php do_action( 'happyforms_part_customize_multi_line_text_after_advanced_options' ); ?>

		<p>
			<label for="<%= instance.id %>_css_class"><?php _e( 'CSS classes', HAPPYFORMS_TEXT_DOMAIN ); ?></label>
			<input type="text" id="<%= instance.id %>_css_class" class="widefat title" value="<%= instance.css_class %>" data-bind="css_class" />
		</p>
	</div>

	<div class="happyforms-part-logic-wrap">
		<div class="happyforms-logic-view">
			<?php happyforms_customize_part_logic(); ?>
		</div>
	</div>

	<?php happyforms_customize_part_footer(); ?>
</script>
