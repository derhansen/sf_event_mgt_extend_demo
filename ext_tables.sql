#
# Table structure for table 'tx_sfeventmgt_domain_model_registration'
#
CREATE TABLE tx_sfeventmgt_domain_model_registration (
	hotel_room_needed tinyint(1) unsigned DEFAULT '0' NOT NULL,
	fax varchar(255) DEFAULT '' NOT NULL,
);

#
# Table structure for table 'tx_sfeventmgt_domain_model_event'
#
CREATE TABLE tx_sfeventmgt_domain_model_event (
	entrance varchar(255) DEFAULT '' NOT NULL,
);
