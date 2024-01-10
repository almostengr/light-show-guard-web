site_name: My Light Show
site_description: Interactive Christmas Light Show
site_author: Kenny Robinson, @almostengr
copyright: Light Show User

# repository information
remote_name: origin
remote_branch: website

# Development server details
dev_addr: 10.10.10.103:8000

use_directory_urls: true
strict: false

theme:
  theme:
  name: null
  custom_dir: 'theme'
  language: en
  static_templates:
    - api.php
    - jukeboxapi.php
  # announcement: Testing
  stationFrequency: "90.3 FM"
  sequences:
    - playlistName: 20th Century Fox.fseq
      displayName: 20th Century Fox
    - playlistName: About Damn Time (Clean) - Lizzo.fseq
      displayName: About Damn Time - Lizzo
    - playlistName: All I Really Want For Christmas-Lil Jon featuring Kool-Aid Man.fseq
      displayName: All I Really Want For Christmas - Lil Jon featuring Kool-Aid Man
    - playlistName: Baby Shark.fseq
      displayName: Baby Shark
    - playlistName: Christmas Eve-Sarajevo.fseq
      displayName: Christmas Eve - Sarajevo
    - playlistName: Christmas Time Is Party Time_Luke.fseq
      displayName: Christmas Time Is Party Time - Luke
    - playlistName: December - Earth Wind and Fire.fseq
      displayName: December - Earth Wind and Fire
    - playlistName: Disco Santa - Holiday Express.fseq
      displayName: Disco Santa (Santa Claus / N.O.E.L.) - Holiday Express
    - playlistName: Holidays - Meghan Trainor.fseq
      displayName: Holidays - Meghan Trainor
    - playlistName: Nutrocker - Trans-Siberian Orchestra.fseq
      displayName: Nutrocker - Trans-Siberian Orchestra
    - playlistName: Shaft - Issac Hayes.fseq
      displayName: Shaft - Issac Hayes
    - playlistName: Spongebob Square Pants.fseq
      displayName: Spongebob Square Pants
    - playlistName: The Polar Express-Tom Hanks.fseq
      displayName: The Polar Express - Tom Hanks
    - playlistName: The Song That Doesnt End - Shari Lewis.fseq
      displayName: The Song That Doesnt End - Shari Lewis
    - playlistName: Uptown Funk - Mark Ronson.fseq
      displayName: Uptown Funk - Mark Ronson
    - playlistName: WAP - Cardi B feat Megan The Stallion.fseq
      displayName: WAP - Cardi B feat Megan The Stallion
    - playlistName: What You Want for Christmas_Quad City DJs and K-nock.fseq
      displayName: What You Want for Christmas - Quad City DJs and K-nock
    - playlistName: Wizards In Winter_Trans-Siberian Orchestra.fseq
      displayName: Wizards In Winter - Trans-Siberian Orchestra
  header_links:
    - url: /details
      name: Details
    - url: /faq
      name: FAQ
    - url: "https://twitter.com/hplightshow"
      name: "@hplightshow Twitter"
    - url: "https://www.youtube.com/channel/UC4xp-TEEIAL-4XtMVvfRaQw?sub_confirmation=1"
      name: Tech Talk
    - url: /calendar
      name: Lighting Calendar
  footer_links:
    - url: "https://twitter.com/hplightshow"
      name: "@hplightshow (Twitter)"
    - url: "https://www.facebook.com/profile.php?id=100089303142244"
      name: Tech Talk (Facebook)
    - url: "https://www.youtube.com/channel/UC4xp-TEEIAL-4XtMVvfRaQw?sub_confirmation=1"
      name: Tech Talk (YouTube)
    - url: "https://github.com/almostengr/light-show-extender"
      name: Github

plugins:
  - minify:
      minify_html: true
