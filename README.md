# Sparcy
v1.0

## Installation
- Clone the repository.
- Run `composer install`.
- Create `files` directory under `/web/sites/default`
- Copy `/web/sites/default/settings.dev` to `/web/sites/settings.php`.
- Copy `/web/sites/default/settings.dev.local.php` to `/web/sites/settings.local.php`.
- Update the database details in code below:
```
$databases['default']['default'] = array (
  'database' => '????',
  'username' => '????',
  'password' => '????',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
```
- Install the site using **Sparcy** profile.

## Configurations
- After site installation, visit the modules page (`admin/modules`) once to avoid any module related error while importing the configurations.
- Go to **Configuration > Development > Configuration Synchronization** (`admin/config/development/configuration`) & import all configurations.
- After importing the configurations, you may need to configure site settings (`admin/config/system/site-information`) again.
- You may also need to configure regional settings (`admin/config/regional/settings`) as needed.
- Clear the caches once.

## Content Import
- Go to **Configuration > CSV importer** (`/admin/config/development/csv-importer`).
### Brands
- Select entity type as **Taxonomy term** & then entity bundle as **Brands**.
- Upload CSV located at `/web/defaults/brands.csv`.
- Arrange the taxonomy terms as needed at `/admin/structure/taxonomy/manage/brands/overview`.
### Types
- Select entity type as **Taxonomy term** & then entity bundle as **Type**.
- Upload CSV located at `/web/defaults/types.csv`.
- Arrange the taxonomy terms as needed at `/admin/structure/taxonomy/manage/type/overview`.

## Adding Shopee
Create new user from **People > Add user** (`/admin/people/create`) & assign role **Shopee Manager**.

## Shopee Manager
- Login with provided credentials.
- Click on **Shortcuts** to see available operations.
- **Add Trader** - Allows adding new trader or supplier.
- **Add Pricing** - Add pricing for specific brand.
