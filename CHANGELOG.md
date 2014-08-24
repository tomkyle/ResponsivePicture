#Changelog

####v1.2.3 to 1.2.5 / 24.08.2014
- Added badges for Travis CI, Scrutinizer, Coveralls

####v1.2.0 to 1.2.2 / 23.08.2014
- Added basic PHPUnit tests, mainly on correct instantiation.

####v1.1.2 to v1.1.4 / 23.08.2014

- New interface `ResponsivePictureAwareInterface` with methods:
    - `setPicture`
    - `getPicture`
- `ResponsivePictureViewInterface` now extends `ResponsivePictureAwareInterface`
- ResponsivePictureView's first constructor parameter now is optional, accepting both `ResponsivePictureInterface` and `null`.
- New `valid` method in `ResponsivePictureViewInterface`, indicating wether the ResponsivePictureView instance is ready to go. 
- Tidied up HTML output.

####v1.1.0 and v1.1.1 / 22.08.2014

- New `__invoke` and interceptor methods for `ResponsivePictureViewInterface`
- Instances of `ResponsivePictureView` are now re-usable








