																								IOT BRIDGE																												
	This is a web app that helps the hardware folks to get the necessary software for their IOTs without getting in to the core coding.
	IT is still not ready yet only the ui kit and the basic CRUD for the devices and parameters is done other things have to be done i ll keep on 
	upadating this repo time to time and also try to expalin the changes below as we proceed if you find this project helpfull feel free to contribute
	
	The UI KIT:
	 					It is designed such to get a feel of IRONMAN as thats cool! 
	 The FrameWorks:
	 					The UI KIT is just an edit on the Bootstrap Material UI
	 					The PHP frame work codeignter is used for back-end
	 					Jason (not yet implemented) will be used at later stages and i ll explain where
The DataBase:
						There are basically 3 tables:
						users,devices,parameters
						
							Columns in users:                Columns in devices:                    Columns in parameters:
	 						id A_I  Bigint                   id Bigint	A_I														parameter_id  BigInt A_I
							name    text										 device_name text                       parameter_name text
							mobile_number text							 device_id text													device_id bigint (It is actually the id of device 
							email  text                      about_device text																			and not the device_id in device table)	
							password text                    key bigInt
							
							

