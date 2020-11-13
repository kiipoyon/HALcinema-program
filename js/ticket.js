function validate (self) {
    try {
      const fieldLabel = self.previousElementSibling.innerHTML;  //名前 or 電話番号

      if (!self.value) {
        throw new Error(fieldLabel + "を入力してください");
      }

      if (self.name === "tel" && !/^[0-9]+$/.test(self.value)) {
        throw new Error(fieldLabel + "は半角数字で入力してください");
      }

      self.parentNode.style.backgroundColor = "#fff";
      self.nextElementSibling.innerHTML = "";
    } catch (err) {
      //inputの親の背景をピンクに
      self.parentNode.style.backgroundColor = "#fee";  

      //inputの弟にエラーメッセージを表示
      self.nextElementSibling.innerHTML = err.message; 
    }
  }