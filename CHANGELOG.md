#Changelog

####1.1.2 / 23.08.2014

- New interface `ResponsivePictureAwareInterface` with methods:
    - `setResponsivePicture`
    - `getResponsivePicture`
- `ResponsivePictureViewInterface` now extends `ResponsivePictureAwareInterface`
- ResponsivePictureView's first constructor parameter now is optional, accepting both `ResponsivePictureInterface` and `null`.
- New `valid` method in `ResponsivePictureViewInterface`, indicating wether the ResponsivePictureView instance is ready to go. 


####v1.1.0 and v1.1.1 / 22.08.2014

- New `__invoke` and interceptor methods for `ResponsivePictureViewInterface`
- Instances of `ResponsivePictureView` are now re-usable








