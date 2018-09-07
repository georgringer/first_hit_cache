#
# Table structure for table 'tx_firsthitcache_domain_model_queue'
#
CREATE TABLE tx_firsthitcache_domain_model_queue (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	record_table varchar(255) DEFAULT '' NOT NULL,
	record_id int(11) unsigned DEFAULT '0' NOT NULL,
	url text NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),
	KEY parent (pid),
);
