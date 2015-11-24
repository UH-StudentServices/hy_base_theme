# Drupal 7 base theme for University of Helsinki
This is a project for Drupal projects in University of Helsinki for boosting up
Drupal development by providing base theme with styleguide included.

## Getting started
Use this theme as your base theme by creating and sub-theme and setting
following line in your sub-theme's info file:

```
base theme = hy_base_theme
```

See more information from Drupal.org [how to create sub-themes](https://www.drupal.org/node/225125).

### Gzip way
Download omega and this theme and place them under themes directory like any
other theme installation process.

### Drush Make way
In your project, include this your project's make file:

```
projects[omega][subdir] = "omega"
projects[omega][version] = "4.3"
projects[hy_base_theme][type] = "theme"
projects[hy_base_theme][subdir] = "hy_base_theme"
projects[hy_base_theme][download][type] = "git"
projects[hy_base_theme][download][url] = "https://github.com/UH-StudentServices/hy_base_theme.git"
projects[hy_base_theme][download][branch] = "7.x-1.x"
projects[hy_base_theme][download][tag] = "7.x-1.0-beta1"
```

See more information from [how/why to create drush make projects](https://www.drupal.org/node/1006620).
