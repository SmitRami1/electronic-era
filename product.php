<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com --><!-- Last Published: Mon Apr 01 2024 04:29:59 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="electronic-era-d58163.webflow.io" data-wf-page="660a380edcbe8e8216677e6b"
    data-wf-site="660a380edcbe8e8216677e08" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Products</title>
    <meta content="Products" property="og:title" />
    <meta content="Products" property="twitter:title" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <link
        href="style.css"
        rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script
        type="text/javascript">WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"] } });</script>
    <script
        type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="https://assets-global.website-files.com/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets-global.website-files.com/img/webclip.png" rel="apple-touch-icon" />
    <script
        type="text/javascript">window.__WEBFLOW_CURRENCY_SETTINGS = { "currencyCode": "USD", "symbol": "$", "decimal": ".", "fractionDigits": 2, "group": ",", "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}", "hideDecimalForWholeNumbers": false };</script>
</head>

<body>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navigation w-nav">
        <div class="navigation-items"><a href="/" class="logo-link w-nav-brand"><img
                    src="https://assets-global.website-files.com/5c6eefaaeddf9248ac13bc72/5c6ef116eddf92775813c297_store-logo%402x.png"
                    width="65" alt="" class="logo-image" /></a>
            <div class="navigation-wrap">
                <nav role="navigation" class="navigation-items w-nav-menu"><a href="/products.html" aria-current="page"
                        class="navigation-item w-nav-link w--current">Products</a><a href="/about"
                        class="navigation-item w-nav-link">About</a><a href="/contact"
                        class="navigation-item w-nav-link">Contact</a></nav>
                <div data-node-type="commerce-cart-wrapper" data-open-product="" data-wf-cart-type="rightSidebar"
                    data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        id
        product {
          id
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_name_
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        sku {
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_main_image_4dr {
            url
            file {
              size
              origFileName
              createdOn
              updatedOn
              mimeType
              width
              height
              variants {
                origFileName
                quality
                height
                width
                s3Url
                error
                size
              }
            }
            alt
          }
          f_price_ {
            value
            unit
            decimalValue
            string
          }
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart"><a href="#"
                        data-node-type="commerce-cart-open-link"
                        class="w-commerce-commercecartopenlink button cc-cart w-inline-block" role="button"
                        aria-haspopup="dialog" aria-label="Open cart">
                        <div class="w-inline-block">Cart</div>
                        <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                            class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
                    </a>
                    <div data-node-type="commerce-cart-container-wrapper" style="display:none"
                        class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar">
                        <div data-node-type="commerce-cart-container" role="dialog"
                            class="w-commerce-commercecartcontainer cart-container">
                            <div class="w-commerce-commercecartheader cart-header">
                                <h4 class="heading-jumbo-tiny">your cart</h4><a href="#"
                                    data-node-type="commerce-cart-close-link"
                                    class="w-commerce-commercecartcloselink close-button w-inline-block" role="button"
                                    aria-label="Close cart"><img
                                        src="https://assets-global.website-files.com/660a380edcbe8e8216677e08/660a380edcbe8e8216677e7b_close-icon.svg"
                                        alt="" class="icon" /></a>
                            </div>
                            <div class="w-commerce-commercecartformwrapper">
                                <form data-node-type="commerce-cart-form" style="display:none"
                                    class="w-commerce-commercecartform">
                                    <script type="text/x-wf-template"
                                        id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb80">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%20cart-item-info-wrap%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20product-name-text%20cc-name-text-cart%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_price_%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-338fcf85-0add-3b81-68ce-59ae991bfb86%22%3E%253Cli%2520class%253D%2522cart-option-wrap%2522%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520class%253D%2522option-item-value%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%20cart-option-list%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-338fcf85-0add-3b81-68ce-59ae991bfb86%22%3E%3Cli%20class%3D%22cart-option-wrap%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22option-item-value%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22remove-button%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22label%20cc-cart-remove-link%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%20text-field%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                                    <div class="w-commerce-commercecartlist cart-list"
                                        data-wf-collection="database.commerceOrder.userItems"
                                        data-wf-template-id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb80">
                                        <div class="w-commerce-commercecartitem"><img
                                                data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                                                src="" alt=""
                                                class="w-commerce-commercecartitemimage w-dyn-bind-empty" />
                                            <div class="w-commerce-commercecartiteminfo cart-item-info-wrap">
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                                                    class="w-commerce-commercecartproductname product-name-text cc-name-text-cart w-dyn-bind-empty">
                                                </div>
                                                <div
                                                    data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_price_%22%7D%7D%5D">
                                                    $ 0.00 USD</div>
                                                <script type="text/x-wf-template"
                                                    id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb86">%3Cli%20class%3D%22cart-option-wrap%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22option-item-value%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                                                <ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                                                    class="w-commerce-commercecartoptionlist cart-option-list"
                                                    data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                                                    data-wf-template-id="wf-template-338fcf85-0add-3b81-68ce-59ae991bfb86">
                                                    <li class="cart-option-wrap"><span
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"></span><span>:
                                                        </span><span class="option-item-value"
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"></span>
                                                    </li>
                                                </ul><a href="#" role=""
                                                    data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                    class="remove-button w-inline-block"
                                                    data-wf-cart-action="remove-item" data-commerce-sku-id=""
                                                    aria-label="Remove item from cart">
                                                    <div class="label cc-cart-remove-link">Remove</div>
                                                </a>
                                            </div><input
                                                data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                class="w-commerce-commercecartquantity text-field" required=""
                                                pattern="^[0-9]+$" inputMode="numeric" type="number" name="quantity"
                                                autoComplete="off" data-wf-cart-action="update-item-quantity"
                                                data-commerce-sku-id="" value="1" />
                                        </div>
                                    </div>
                                    <div class="w-commerce-commercecartfooter cart-footer">
                                        <div aria-live="" aria-atomic="false"
                                            class="w-commerce-commercecartlineitem cart-line-item">
                                            <div>Subtotal</div>
                                            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                                                class="w-commerce-commercecartordervalue paragraph-bigger"></div>
                                        </div>
                                        <div>
                                            <div data-node-type="commerce-cart-quick-checkout-actions"
                                                style="display:none"><a role="button" aria-haspopup="dialog"
                                                    aria-label="Apple Pay"
                                                    data-node-type="commerce-cart-apple-pay-button"
                                                    style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                                                    class="w-commerce-commercecartapplepaybutton apple-pay"
                                                    tabindex="0">
                                                    <div></div>
                                                </a><a role="button" tabindex="0" aria-haspopup="dialog"
                                                    data-node-type="commerce-cart-quick-checkout-button"
                                                    style="display:none"
                                                    class="w-commerce-commercecartquickcheckoutbutton pay-with-browser"><svg
                                                        class="w-commerce-commercequickcheckoutgoogleicon"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <defs>
                                                            <polygon id="google-mark-a"
                                                                points="0 .329 3.494 .329 3.494 7.649 0 7.649">
                                                            </polygon>
                                                            <polygon id="google-mark-c"
                                                                points=".894 0 13.169 0 13.169 6.443 .894 6.443">
                                                            </polygon>
                                                        </defs>
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path fill="#4285F4"
                                                                d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                                            </path>
                                                            <path fill="#34A853"
                                                                d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                                            </path>
                                                            <g transform="translate(0 4)">
                                                                <mask id="google-mark-b" fill="#fff">
                                                                    <use xlink:href="#google-mark-a"></use>
                                                                </mask>
                                                                <path fill="#FBBC04"
                                                                    d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                                                    mask="url(#google-mark-b)"></path>
                                                            </g>
                                                            <mask id="google-mark-d" fill="#fff">
                                                                <use xlink:href="#google-mark-c"></use>
                                                            </mask>
                                                            <path fill="#EA4335"
                                                                d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                                                mask="url(#google-mark-d)"></path>
                                                        </g>
                                                    </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                                                            <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1">
                                                            </polygon>
                                                            <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9">
                                                            </polygon>
                                                            <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9">
                                                            </polygon>
                                                        </g>
                                                    </svg>
                                                    <div>Pay with browser.</div>
                                                </a></div>
                                            <div
                                                data-wf-paypal-button="{&quot;layout&quot;:&quot;horizontal&quot;,&quot;color&quot;:&quot;black&quot;,&quot;shape&quot;:&quot;rect&quot;,&quot;label&quot;:&quot;paypal&quot;,&quot;tagline&quot;:false,&quot;note&quot;:false}">
                                            </div><a href="/checkout" value="Continue to Checkout"
                                                data-node-type="cart-checkout-button"
                                                class="w-commerce-commercecartcheckoutbutton button"
                                                data-loading-text="Hang Tight...">Continue to Checkout</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-commerce-commercecartemptystate">
                                    <div class="paragraph-light">No items found.</div>
                                </div>
                                <div aria-live="" style="display:none" data-node-type="commerce-cart-error"
                                    class="w-commerce-commercecarterrorstate status-message cc-error-message">
                                    <div class="w-cart-error-msg"
                                        data-w-cart-quantity-error="Product is not available in this quantity."
                                        data-w-cart-general-error="Something went wrong when adding this item to the cart."
                                        data-w-cart-checkout-error="Checkout is disabled on this site."
                                        data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                                        data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                                        Product is not available in this quantity.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-button w-nav-button"><img
                        src="https://assets-global.website-files.com/660a380edcbe8e8216677e08/660a380edcbe8e8216677e79_menu-icon.png"
                        width="22" alt="" class="menu-icon" /></div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container cc-heading-wrap">
            <h1>Our Products</h1>
            <div class="store-categories-wrap"><a href="/products" aria-current="page"
                    class="products-category-link w--current">All Products</a>
                <div class="w-dyn-list">
                    <div role="list" class="collection-list w-dyn-items">
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-1"
                                class="products-category-link">Category 1</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-2"
                                class="products-category-link">Category 2</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-3"
                                class="products-category-link">Category 3</a></div>
                        <div role="listitem" class="w-dyn-item"><a href="/category/category-4"
                                class="products-category-link">Category 4</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="w-dyn-list">
            <div role="list" class="collection-wrap w-dyn-items">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elec-era";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT name, image FROM categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    echo '                <div role="listitem" class="collection-item w-dyn-item">
                <a href="repair.php?product='.$row['name'].'"><img src="'.$row['image'].'">
                        <div class="product-description">
                            <div class="product-name-text">'.$row['name'].'</div>
                        </div>
                    </a>
                </div>';
        }
    }
    ?>
    </div>
        </div>
    </div>
    <div class="section cc-subscribe-form">
        <div class="container cc-subscription-form">
            <div class="heading-jumbo-small">Monthly Newsletter</div>
            <div class="paragraph-light cc-subscribe-paragraph">Sign up to receive updates from our shop, including new
                tea selections and upcoming events.</div>
            <div class="form-block w-form">
                <form id="wf-form-Monthly-Newsletter-Form" name="wf-form-Monthly-Newsletter-Form"
                    data-name="Monthly Newsletter Form" method="get" class="subscribe-form"
                    data-wf-page-id="660a380edcbe8e8216677e6b"
                    data-wf-element-id="2df3695a-ff87-37fa-7ac7-63d4f4891940"><input
                        class="text-field cc-subscribe-text-field w-input" maxlength="256" name="Newsletter-Email"
                        data-name="Newsletter Email" placeholder="Enter your email" type="email" id="Newsletter-Email"
                        required="" /><input type="submit" data-wait="Please wait..." class="button w-button"
                        value="Submit" /></form>
                <div class="status-message w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="status-message w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="w-layout-grid footer"><a href="/" id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971b-87e29718"
                    class="logo-link w-inline-block"><img
                        src="https://assets-global.website-files.com/660a380edcbe8e8216677e08/660a380edcbe8e8216677e74_store-logo%402x.png"
                        width="65" alt="" class="logo-footer" /></a>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971d-87e29718" class="label">Menu</div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2971f-87e29718" class="links-section-footer"><a href="/"
                        class="footer-link">Home</a><a href="/about" class="footer-link">About</a><a href="/contact"
                        class="footer-link">Contact</a><a href="/products" aria-current="page"
                        class="footer-link w--current">Products</a><a href="/blog" class="footer-link">Blog</a><a
                        href="/styleguide" class="footer-link">Styleguide</a></div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29724-87e29718" class="label">Categories</div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29726-87e29718" class="links-section-footer">
                    <div class="w-dyn-list">
                        <div role="list" class="w-dyn-items">
                            <div role="listitem" class="w-dyn-item"><a href="/category/category-1"
                                    class="footer-link">Category 1</a></div>
                            <div role="listitem" class="w-dyn-item"><a href="/category/category-2"
                                    class="footer-link">Category 2</a></div>
                            <div role="listitem" class="w-dyn-item"><a href="/category/category-3"
                                    class="footer-link">Category 3</a></div>
                            <div role="listitem" class="w-dyn-item"><a href="/category/category-4"
                                    class="footer-link">Category 4</a></div>
                        </div>
                    </div>
                </div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972d-87e29718" class="label">Help</div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2972f-87e29718" class="links-section-footer"><a
                        href="/contact" class="footer-link">Shipping</a><a href="/contact" class="footer-link">Returns
                        &amp; Exchange</a><a href="/contact" class="footer-link">Product Care</a></div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29736-87e29718" class="label">Follow</div>
                <div id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e29738-87e29718" class="links-section-footer"><a
                        href="https://www.instagram.com/webflowapp/" target="_blank" class="footer-link">Instagram</a><a
                        href="https://www.facebook.com/webflow/" target="_blank" class="footer-link">Facebook</a><a
                        href="https://twitter.com/webflow" target="_blank" class="footer-link">Twitter</a></div><a
                    id="w-node-_88a386dd-8f07-0c34-70f0-2d9f87e2973f-87e29718" href="https://webflow.com/"
                    target="_blank" class="made-with-webflow w-inline-block"><img
                        src="https://assets-global.website-files.com/660a380edcbe8e8216677e08/660a380edcbe8e8216677e7a_webflow-w-small%402x.png"
                        width="15" alt="" class="webflow-logo-tiny" />
                    <div class="paragraph-tiny">Powered by Webflow</div>
                </a>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=660a380edcbe8e8216677e08"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="/era.js"
        type="text/javascript"></script>
</body>

</html>