# Mautic enqueued emails counter plugin
This plugin allows Mautic to count the emails in queue.

## Installation via .zip
1. Download the [master.zip](https://github.com/1FF/mautic-enqueued-emails/archive/master.zip), extract it into the `plugins/` directory and rename the new directory to `EmailsQCounterBundle`.
2. Clear the cache via console command `php bin/console cache:clear --env=prod` (might take a while) *OR* manually delete the `app/cache/prod` directory.

## Update
1. Remove `plugins/EmailsQCounterBundle` directory.
2. Download the [master.zip](https://github.com/1FF/mautic-enqueued-emails/archive/master.zip), extract it into the `plugins/` directory and rename the new directory to `EmailsQCounterBundle`.
3. Clear the cache via console command `php bin/console cache:clear --env=prod` (might take a while) *OR* manually delete the `app/cache/prod` directory.
4. Run `php bin/console mautic:plugins:install` in root Mautic directory.

## Visualization
Navigate to Settings Panel. You should see the "Enqueued Emails" menu in your settings:

-   ![image](https://user-images.githubusercontent.com/28507711/197179763-28caff9c-fd44-4579-a3e8-7eef610bf94a.png)

In the plugin you will see the field with the email queue counter field:

-   ![image](https://user-images.githubusercontent.com/28507711/197180325-34e24d4d-255a-41ff-acbf-566acf9ba3a0.png)

## Author(s)

* [1ForFit Company](https://github.com/1FF)

## Enjoy!
