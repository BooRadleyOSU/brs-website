# The Boo Radley Society Wordpress Installation

## See it live!

Assuming that we've done everything correctly you should be able to view this website at [booradley.org.ohio-state.edu](https://booradley.org.ohio-state.edu).

## Roadmap

* Preparing the front-end for many non-administrative users.
* Adding something wiki-like as a resource for our members.
* Adding basic analytics.
* Automating the development environment setup.

## Documentation

### I'm an author looking to publish my work on the website.

I'm not really sure how you got here but this isn't really the place for you. Nonetheless I can offer some recommendations of where you should go for help.

* [What is a CMS?](https://en.wikipedia.org/wiki/Content_management_system)
* [General information on Wordpress.](https://codex.wordpress.org/Getting_Started_with_WordPress)
* [Authoring posts.](https://codex.wordpress.org/Writing_Posts)
* [Authoring pages.](https://codex.wordpress.org/Pages)
* [NinjaForms Documentation](https://docs.ninjaforms.com)
* [Creating forms with NinjaForms.](https://docs.ninjaforms.com/customer/en/portal/articles/2045986-building-your-form)
* [Editing images with GIMP.](https://www.gimp.org/tutorials)
* [OSU's URL shortener.](https://go.osu.edu)
* [Adding an event to Google Calendar.](https://support.google.com/calendar/answer/72143?hl=en)
* Importing a .csv file into [LibreOffice Calc](https://help.libreoffice.org/Calc/Importing_and_Exporting_CSV_Files) or [Excel](https://support.office.com/en-us/article/Import-or-export-text-txt-or-csv-files-5250ac4c-663c-47ce-937b-339e391393ba).
* Exporting documents to PDF in [LibreOffice Writer](https://help.libreoffice.org/Common/Export_as_PDF) or [Word](https://support.office.com/en-us/article/Convert-a-document-to-PDF-F7F18DDA-5610-431B-9C76-E5DF21ECCCCF).
* [University tech support.](https://ocio.osu.edu/help)
* [How page caching works.](https://en.wikipedia.org/wiki/Web_cache)
* [Request for an osu.edu URL](https://www.osu.edu/newmedia/checklist.php)

### I'm a developer and want to contribute to the website.

You've come to the right place. Here is a short list of the technologies that you will need to be at least *somewhat* familiar with in order to understand what's going on.

* [`git`](https://git-scm.com/docs) - We, along with the University, use `git` for our version control.
* [GitHub Markdown](https://help.github.com/articles/basic-writing-and-formatting-syntax) - You are planning to write documentation right? **Right?!?** Hopefully we've set the bar pretty high but you need to be aware that the person who takes over after you is going to have no idea why you made all the design decisions without clear documentation.
* [JavaScript](https://developer.mozilla.org/en-US/docs/Web/JavaScript) - There's really no way around it. If you want your pages to actually *do* things you've going to need to know JavaScript.
* [jQuery](http://jquery.com) - Is it 2007? Isn't everybody using something hip like Angular or React now? If you're unfamiliar, jQuery is a JS library which abstracts most of the native browser functions to make writing JS easier and to work around differences between browsers.
* [CSS3](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS3) - The website uses some fairly advanced CSS rules to make the website accessible on large/small screens alike.
* [PHP5](https://php.net) - WordPress is based on PHP, OSU's hosting supports PHP, we use PHP. We don't like it anymore than you do. PHP is a so-called 'server-side' language which is used to serve pages with non-static content. PHP is like having a really advanced toolbox from an alien race which has three eyes, tentacles for hands, and twice the size of your average human -- the tools are really powerful but incredibly cumbersome to use. You're going to know how PHP works to make any non-trivial modifications to the site and access form data. I'm so sorry.
* TLS - Thankfully OIT takes care of the actual certificates for you, but you should know how to make sure that the website delivers all content via HTTPS and why it's important to do so.
* [SFTP](https://www.freebsd.org/cgi/man.cgi?query=sftp) - SFTP, or **S**SH **F**ile **T**ransfer **P**rotocol is the way you access the actual files on web server, logs, and communicate with the OIT staff.
* [SQL/MariaDB](https://mariadb.org/learn/) - OSU uses MariaDB as their database software. There is (currently) no DBMS software (**D**ata**b**ase **M**anagement **S**ystem) installed on the web server so when you need to directly manage the database you need to connect using your own SQL client.

## Issues

### I found a problem.

If you find something wrong with the website you should go to [the issues page](https://github.com/BooRadleyOSU/brs-website/issues) and create an issue so that we have a record of your problem. If your problem isn't in the issue tracker it doesn't exist and we make no guarantees that we will remember it.

### I fixed the problem.

Great! If you keep it up we will look into adding you as a developer of the project so you can keep contributing. If your intention is to become the new webmaster once the we graduate this is an excellent way to look good during the interview.

Until then you should submit a [pull request](https://github.com/BooRadleyOSU/brs-website/pulls) with your changes. We will look over what you've done, give you feedback if something isn't quite right, and merge the results once it's ready to be applied.

## Contact

* If you're a part of OSU you can chat with us on [Slack](osu.slack.com) in the `#brs` channel.

## Authors
* Joseph Chagnon <[chagnon.5@osu.edu](mailto:chagnon.5@osu.edu)>
