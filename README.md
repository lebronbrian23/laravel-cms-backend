# PHP Client Management System

This repository is a simple CMS using Laravel and W3.CSS. The code consists of a login, a dashboard, a place to view/add/edit/delete users, and a place to view/add/edit/delete content.

<table>
    <tr>
        <th>Name</th>
        <th>Contribution</th>
    </tr>
    <tr>
        <td>Beth Jarrett</td>
        <td>Skills, Front-End Design & Execution</td>
     </tr>
     <tr>
        <td>Brian Ssekalegga</td>
        <td>Content Blocks, Social Media, API & Technical Support</td>
    </tr>
 </table>

Notes:

The CMS uses the AWS s3 storage driver, make sure to update your .env file to:

You have to create an account with AWS

create IAM user and get access key and secret, while creating the user make sure you add s3 full access to the user

create a s3 bucket

You should make the bucket publicly available inorder to display images in the backend or API

Then you have to edit your .env file and add the credentials from s3 bucket
```php
FILESYSTEM_DRIVER=s3
AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false
```
The database setup includes migrations and seeding. Run the following command to initialize the database:

```
php artisan migrate:refresh --seed
```
Full tutorial URL: https://codeadam.ca/learning/php-cms-laravel.html

<table>
  <tr>
    <td>Admin Username:</td>
    <td>email@address.com</td>
  </tr>
  <tr>
    <td>Admin Password:</td>
    <td>password</td>
    </tr>
</table>
