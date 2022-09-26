# AutoDeactivation

This plugin introduces a cron job which deactivates unused user accounts, sending notification mails before and when doing so. The inactivity is measured by a certain timespan since the last login, or since the creation date if no login was ever performed. All parameters are configurable.

## Getting Started

### Requirements

* ILIAS 5.3.x / 5.4.x
* PHP >=7.0

### Installing

Start at your ILIAS root directory
```bash
mkdir -p Customizing/global/plugins/Services/Cron/CronHook
cd Customizing/global/plugins/Services/Cron/CronHook
git clone https://github.com/fluxapps/AutoDeactivation.git
```
Update, activate and config the plugin in the ILIAS Plugin Administration

## Authors

This is an OpenSource project by studer + raimann ag (https://fluxlabs.ch)

## License

This project is licensed under the GPL v3 License 

## Maintenance
fluxlabs ag, support@fluxlabs.ch

This project is maintained by fluxlabs. 
