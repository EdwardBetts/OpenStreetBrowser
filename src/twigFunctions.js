var OverpassLayer = require('overpass-layer')
var OpeningHours = require('opening_hours')
var colorInterpolate = require('color-interpolate')
var osmParseDate = require('openstreetmap-date-parser')
var osmFormatDate = require('openstreetmap-date-format')
const natsort = require('natsort')
const md5 = require('md5')

var md5cache = {}

OverpassLayer.twig.extendFunction('tagsPrefix', function (tags, prefix) {
  var ret = {}
  var count = 0

  for (var k in tags) {
    if (k.substr(0, prefix.length) === prefix) {
      ret[k.substr(prefix.length)] = k
      count++
    }
  }

  if (count === 0) {
    return null
  }

  return ret
})

OverpassLayer.twig.extendFunction('openingHoursState', function (openingHours) {
  try {
    var oh = new OpeningHours(openingHours)
  } catch (err) {
    console.log('Error in opening_hours: ' + err)
    return 'unknown'
  }

  return oh.getStateString(new Date(), true)
})
OverpassLayer.twig.extendFilter('websiteUrl', function (value) {
  if (value.match(/^https?:\/\//)) {
    return value
  }

  return 'http://' + value
})
OverpassLayer.twig.extendFilter('matches', function (value, match) {
  if (value === null) {
    return false
  }

  return value.toString().match(match)
})
OverpassLayer.twig.extendFilter('natsort', function (values, options) {
  return values.sort(natsort(options))
})
OverpassLayer.twig.extendFilter('unique', function (values, options) {
  // source: https://stackoverflow.com/a/14438954
  function onlyUnique (value, index, self) {
    return self.indexOf(value) === index
  }
  return values.filter(onlyUnique)
})
OverpassLayer.twig.extendFunction('colorInterpolate', function (map, value) {
  var colormap = colorInterpolate(map)
  return colormap(value)
})
OverpassLayer.twig.extendFilter('osmParseDate', function (value) {
  return osmParseDate(value)
})
OverpassLayer.twig.extendFilter('osmFormatDate', function (value, param) {
  return osmFormatDate(value, param.length ? param[0] : {})
})
OverpassLayer.twig.extendFilter('md5', function (value) {
  if (!(value in md5cache)) {
    md5cache[value] = md5(value)
  }

  return md5cache[value]
})
OverpassLayer.twig.extendFunction('evaluate', function (tags) {
  var ob = {
    id: 'x0',
    isShown: true,
    layer_id: global.currentCategory.id,
    object: {
      id: 'x0',
      meta: {},
      tags: tags,
      type: 'special'
    }
  }

  var d = global.currentCategory.layer.mainlayer.evaluate(ob)
  return d
})
OverpassLayer.twig.extendFunction('enumerate', function (value) {
  let list = value.split(/,/)
  if (list.length > 1) {
    return list.slice(0, -1).join(lang_str.enumerate_join) +  lang_str.enumerate_last + list.slice(-1)[0]
  }
  return value
})
