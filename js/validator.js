

function Validator(options) {

    // Hàm tìm thẻ div cha chứa class 'form-group' của thẻ input
    function getParent(element, selector) {
        while (element.parentElement) {
            if(element.parentElement.matches(selector)){
                return element.parentElement;
            }
            element = element.parentElement;
        }    
    }

    // tạo biến lưu lại các mảng rule (một input có thể có nhiều rule nên cần lưu vào mảng)
    var selectorRules = {};

    // Hàm xác định lỗi
    function validate(inputElement, rule, errorElement, parentInputElement) {
        var errorMessage;
        // Lấy ra các rule của mỗi input
        var rules = selectorRules[rule.selector];
        // Lặp qua từng rule và kiểm tra
        for (var i=0; i < rules.length; i++) {

            switch (inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](formElement.querySelector(rule.selector + ":checked"));
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);
                }
                
            if (errorMessage) {break};
        }
        if (errorMessage) {
            errorElement.innerText = errorMessage;
            parentInputElement.classList.add('invalid');
        } else {
            errorElement.innerText = '';
            parentInputElement.classList.remove('invalid');
        }

        return !errorMessage;
    }

    // Lấy element của form cần validate
    var formElement = document.querySelector(options.form)
    
    if (formElement) {
        
        // Xử lý khi nhấn submit
        formElement.onsubmit = (e) => {
            e.preventDefault();

            var isFormValid = true;
            options.rules.forEach(rule => {
                var inputElement = formElement.querySelector(rule.selector);
                // Array.from(inputElements).forEach(inputElement => {
                // })
                var parentInputElement = getParent(inputElement, options.formGroupSelector)
                var errorElement = parentInputElement.querySelector(options.errorSelector);
                var isValid = validate(inputElement, rule, errorElement, parentInputElement);
                if (!isValid) {
                    isFormValid = false;
                }
            });

            if (isFormValid) {
                formElement.submit();
                // console.log("đã submit");
            }
        }

        // Lặp qua các rule
        options.rules.forEach(rule => {

            // lưu lại các rule cho mỗi input
            if (Array.isArray(selectorRules[rule.selector])) {
                selectorRules[rule.selector].push(rule.test);
            } else {
                selectorRules[rule.selector] = [rule.test];
            }

            var inputElements = formElement.querySelectorAll(rule.selector);
            // Chuyển nodeList thành mảng và lặp dùng foreach
            Array.from(inputElements).forEach(inputElement => {
                var parentInputElement = getParent(inputElement, options.formGroupSelector)
                var errorElement = parentInputElement.querySelector(options.errorSelector);
                if (inputElement) {
    
                    // Xử lý khi blur khỏi input
                    inputElement.onblur = function() {
                        validate(inputElement, rule, errorElement, parentInputElement);
                    }
                    // Xử lý khi người dùng đang nhập vào input thì ẩn báo lỗi
                    inputElement.oninput = function () {
                        errorElement.innerText = '';
                        parentInputElement.classList.remove('invalid');
                    }
                }
            })
        });
    }
}


// Define rules
//1. Khi có lỗi => trả ra message lỗi
//2. Khi hơp lệ => (undefined)
Validator.isRequired = (selector, message) => {
    return {
        selector: selector,
        test: (value) => {
            return value ? undefined : message || "Please Fill out This Field!!"
        }
    } 
}
Validator.isEmail = (selector, message) => {
    return {
        selector: selector,
        test: (value) => {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || "You have typed an invalid email address!"
        }
    } 
}
Validator.minLength = (selector, min, message) => {
    return {
        selector: selector,
        test: (value) => {
            return value.length >= min ? undefined : message || `You have to enter at least ${min} characters!`
        }
    } 
}

Validator.isConfirmed = (selector, getConfirmValue, message) => {
    return {
        selector: selector,
        test: (value) => {
            return value === getConfirmValue() ? undefined : message || "Input value is incorrect"
        }
    } 
}

// Sử dụng
Validator({
    form: "#form-1",
    formGroupSelector: ".form-group",
    errorSelector: ".form-message",
    rules: [
      Validator.isRequired("#fullname", "Please fill out your full name!!"),
      Validator.isRequired("#email", "Please fill out this field !!"),
      Validator.isEmail("#email"),
      Validator.isRequired("#formDate", "Please fill out this field !!"),
      Validator.isRequired("#formTimes", "Please fill out this field !!"),
      Validator.isRequired("#formAddress", "Please type your address !!"),
      Validator.isRequired("#gender", "Please choose your gender !!"),
      Validator.isRequired("input[name='service']", "Please choose your services !!"),

    ],

  });