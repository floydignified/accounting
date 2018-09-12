$.noConflict();

jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	} );

	jQuery('.selectpicker').selectpicker;


	$('#menuToggle').on('click', function(event) {
		$('body').toggleClass('open');
	});

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	// $('.user-area> a').on('click', function(event) {
	// 	event.preventDefault();
	// 	event.stopPropagation();
	// 	$('.user-menu').parent().removeClass('open');
	// 	$('.user-menu').parent().toggleClass('open');
	// });

	$('#toggle_edit_company_name').on('click', function(event) {
		event.preventDefault();
		
		if($("#company_name").prop('readonly')){
			$("#company_name").prop('readonly', false);
			$("#legal_name").prop('readonly', false);
			$("#business_id_no").prop('readonly', false);
		}else{
			$("#company_name").prop('readonly', true);
			$("#legal_name").prop('readonly', true);
			$("#business_id_no").prop('readonly', true);
		}
	});

	$('#toggle_edit_company_type').on('click', function(event) {
		event.preventDefault();
		
		if($("#tax_form").prop('readonly')){
			$("#tax_form").prop('readonly', false);
			$("#industry").prop('readonly', false);
		}else{
			$("#tax_form").prop('readonly', true);
			$("#industry").prop('readonly', true);
		}
	});

	$('#toggle_edit_contact_info').on('click', function(event) {
		event.preventDefault();
		
		if($("#company_email").prop('readonly')){
			$("#company_email").prop('readonly', false);
			$("#customer_facing_email").prop('readonly', false);
			$("#company_phone").prop('readonly', false);
			$("#website").prop('readonly', false);
		}else{
			$("#company_email").prop('readonly', true);
			$("#customer_facing_email").prop('readonly', true);
			$("#company_phone").prop('readonly', true);
			$("#website").prop('readonly', true);
		}
	});

	$('#toggle_edit_address').on('click', function(event) {
		event.preventDefault();
		
		if($("#company_address").prop('readonly')){
			$("#company_address").prop('readonly', false);
			$("#customer_facing_address").prop('readonly', false);
			$("#legal_address").prop('readonly', false);
		}else{
			$("#company_address").prop('readonly', true);
			$("#customer_facing_address").prop('readonly', true);
			$("#legal_address").prop('readonly', true);
		}
	});

	$('#toggle_edit_sales_form').on('click', function(event) {
		event.preventDefault();
		
		if($("#preferred_invoice_term").prop('readonly')){
			$("#preferred_invoice_term").prop('readonly', false);
			$("#preferred_delivery_method").prop('readonly', false);
			$("#shipping").prop('disabled', false);
			$("#custom_field").prop('disabled', false);
			$("#custom_transaction_number").prop('disabled', false);
			$("#service_date").prop('disabled', false);
			$("#discount").prop('disabled', false);
			$("#deposit").prop('disabled', false);


		}else{
			$("#preferred_invoice_term").prop('readonly', true);
			$("#preferred_delivery_method").prop('readonly', true);
			$("#shipping").prop('disabled', true);
			$("#custom_field").prop('disabled', true);
			$("#custom_transaction_number").prop('disabled', true);
			$("#service_date").prop('disabled', true);
			$("#discount").prop('disabled', true);
			$("#deposit").prop('disabled', true);
		}

	});

	$('#toggle_edit_products_and_services').on('click', function(event) {
		event.preventDefault();
		
		if($("#show_product_column").prop('disabled')){
			$("#show_product_column").prop('disabled', false);
			$("#show_sku_column").prop('disabled', false);
			$("#track_quantity_and_price").prop('disabled', false);
			$("#track_quantity_on_hand").prop('disabled', false);
		}else{
			$("#show_product_column").prop('disabled', true);
			$("#show_sku_column").prop('disabled', true);
			$("#track_quantity_and_price").prop('disabled', true);
			$("#track_quantity_on_hand").prop('disabled', true);
		}

	});

	$('#toggle_edit_sales_messages').on('click', function(event) {
		event.preventDefault();
		
		if($("#form_email_message").prop('readonly')){
			$("#form_email_message").prop('readonly', false);
		}else{
			$("#form_email_message").prop('readonly', true);
		}

	});

	$('#toggle_edit_reminders').on('click', function(event) {
		event.preventDefault();
		
		if($("#default_reminder_message").prop('readonly')){
			$("#default_reminder_message").prop('readonly', false);
		}else{
			$("#default_reminder_message").prop('readonly', true);
		}

	});

	$('#toggle_edit_online_delivery').on('click', function(event) {
		event.preventDefault();
		
		if($("#email_option").prop('readonly')){
			$("#email_option").prop('readonly', false);
		}else{
			$("#email_option").prop('readonly', true);
		}

	});

	$('#toggle_edit_statements').on('click', function(event) {
		event.preventDefault();
		
		if($("#show_aging_table").prop('disabled')){
			$("#show_aging_table").prop('disabled', false);
		}else{
			$("#show_aging_table").prop('disabled', true);
		}

	});

	$('#toggle_edit_bills_and_expenses').on('click', function(event) {
		event.preventDefault();
		
		if($("#show_items_table").prop('disabled')){
			$("#show_items_table").prop('disabled', false);
			$("#track_expense_and_item_by_customer").prop('disabled', false);
			$("#billable").prop('disabled', false);
			$("#bill_payment_terms").prop('readonly', false);
		}else{
			$("#show_items_table").prop('disabled', true);
			$("#track_expense_and_item_by_customer").prop('disabled', true);
			$("#billable").prop('disabled', true);
			$("#bill_payment_terms").prop('readonly', true);
		}

	});

	$('#toggle_edit_purchase_orders').on('click', function(event) {
		event.preventDefault();
		
		if($("#use_purchase_order").prop('disabled')){
			$("#use_purchase_order").prop('disabled', false);
		}else{
			$("#use_purchase_order").prop('disabled', true);
		}

	});

	$('#toggle_edit_expense_messages').on('click', function(event) {
		event.preventDefault();
		
		if($("#purchase_order_email_message").prop('readonly')){
			$("#purchase_order_email_message").prop('readonly', false);
		}else{
			$("#purchase_order_email_message").prop('readonly', true);
		}

	});
	

});