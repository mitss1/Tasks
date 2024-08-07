<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a id="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/mitss1/Tasks">
    <img src="https://github.com/user-attachments/assets/e7fb57f8-f118-4910-89c7-feaf9309b7aa" alt="Logo" width="400" height="80">

  </a>

<h3 align="center">Tasks</h3>

  <p align="center">
    This project was created as a basic practice for me to try out Laravel Prompts.
    <br />
    <a href="https://github.com/mitss1/Tasks"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/mitss1/Tasks">View Demo</a>
    ·
    <a href="https://github.com/mitss1/Tasks/issues/new?labels=bug&template=bug-report---.md">Report Bug</a>
    ·
    <a href="https://github.com/mitss1/Tasks/issues/new?labels=enhancement&template=feature-request---.md">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

<img width="555" alt="Screenshot 2024-08-07 at 17 07 42" src="https://github.com/user-attachments/assets/cd5df691-572f-4d50-8a5a-e808dc4c872d">

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![Laravel][Laravel.com]][Laravel-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

Setting up your project locally.
To get a local copy up and running follow these simple example steps.

### Prerequisites

Run composer install
* Composer
  ```sh
  Composer install
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/mitss1/Tasks.git
   ```
2. Create a Laravel app key
   ```sh
   php artisan key:generate
   ```
3. Connect to an sqllite database and migrate
   ```sh
   php artisan migrate:fresh
   ```


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

There are 4 main uses for the CLI. Listing tasks, adding new tasks, completing tasks and deleting tasks.

1. View the list
   ```sh
   php artisan todo:list
   ```
2. Add a task
   ```sh
   php artisan todo:add
   ```
3. Complete a task
   ```sh
   php artisan todo:complete
   ```
4. Delete a task
   ```sh
   php artisan todo:delete
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Mats Søiland - matsis11@hotmail.com

Project Link: [https://github.com/mitss1/Tasks](https://github.com/mitss1/Tasks)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/mitss1/Tasks.svg?style=for-the-badge
[contributors-url]: https://github.com/mitss1/Tasks/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/mitss1/Tasks.svg?style=for-the-badge
[forks-url]: https://github.com/mitss1/Tasks/network/members
[stars-shield]: https://img.shields.io/github/stars/mitss1/Tasks.svg?style=for-the-badge
[stars-url]: https://github.com/mitss1/Tasks/stargazers
[issues-shield]: https://img.shields.io/github/issues/mitss1/Tasks.svg?style=for-the-badge
[issues-url]: https://github.com/mitss1/Tasks/issues
[license-shield]: https://img.shields.io/github/license/mitss1/Tasks.svg?style=for-the-badge
[license-url]: https://github.com/mitss1/Tasks/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/mats-s%C3%B8iland-386493269
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
