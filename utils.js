var maxAge = "Fri, 31 Dec 9999 23:59:59 UTC";

var numericSort = function (a, b) {
    return b - a;
};

var rand = function (min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

var sep = function (number) {
    if (isNaN(number)) {
        return '-';
    }
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
};

String.prototype.contains = function (string) {
    return this.indexOf(string) > -1;
};

Object.defineProperty(Array.prototype, "contains", {
    configurable: true,
    enumerable: false,
    value: function (value) {
        return this.indexOf(value) > -1;
    }
});

Object.defineProperty(Array.prototype, "pushStrict", {
    configurable: true,
    enumerable: false,
    value: function (value) {
        if (!this.contains(value)) {
            this.push(value);
        }
    }
});

Object.defineProperty(Array.prototype, "remove", {
    configurable: true,
    enumerable: false,
    value: function (value) {
        if (this.contains(value)) {
            this.splice(this.indexOf(value), 1);
        }
    }
});