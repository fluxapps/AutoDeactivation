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

## Contributing :purple_heart:
Please ...
1. ... register an account at https://git.fluxlabs.ch
2. ... write us an email: support@fluxlabs.ch
3. ... we give you access to the projects you like to contribute :fire:


## Adjustment suggestions / bug reporting :feet:
Please ...
1. ... register an account at https://git.fluxlabs.ch
2. ... ask us for a sla: support@fluxlabs.ch :kissing_heart:
3. ... we will give you the access with the possibility to read and create issues or to discuss feature requests with us.
