<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // factory(Product::class,50)->create()->each(function($product){
      //   $arr = [];
      //   for ($i = 0; $i <= rand(0,2); $i++) {
      //     if ($i == 0) {
      //       $arr[] = rand(1,15);
      //     }
      //     if ($i == 1) {
      //       $arr[] = rand(16,35);
      //     }
      //     if ($i == 2) {
      //       $arr[] = rand(36,50);
      //     }
      //   } 
      //   $product->tags()->sync($arr);        
      // });

      //Khoa học xã hội
      Product::create([
        'name' => 'Những Câu Đố Tư Duy Và Logic Xứ Canterbury',
        'code' => strtoupper(str_random(6)),
        'author' => 'Henry Ernest Dudeney ',
        'translator' => 'Nguyễn Tiến Dũng , Lê Bích Phượng ',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Nước Anh, quê hương của Newton và Shakespear, là một trong những cái nôi của văn hóa và khoa học thế giới. Một trong những truyền thống văn hóa của người Anh, được mọi tầng lớp nhân dân hưỏng ứng, chính là đố vui. Đó là những câu đố về lô gíc, chiến lược, toán học, v.v. thú vị cho cả trẻ em và ngưòi lỏn, không những là một trò giải trí lành mạnh, mà còn giúp mọi người phát triển tư duy, thông minh sáng suốt lên.

        Chính vì vậy, chúng tôi rất hân hạnh khi được giới thiệu với bạn đọc tuyển tập các câu đố nổi tiếng này của nước Anh, đã được tác giả Henry Ernest Dudeney ngưòi Anh viết thành sách nhan đề The Can¬terbury Puzzles and Other Curious Problems. Nhiều câu đố trong số này có thể coi là kinh điển và là một phần không thể thiếu trong nền tảng kiến thức văn hóa chung. 
        
        Một điểm đặc biệt thú vị của quyển sách này là nó không chỉ gồm các câu đố, mà còn là những câu chuyện có tính văn học, có nhân vật và cốt truyện kèm theo cả những vần thơ. Kê’ cả nếu bạn đọc không thích thú lắm với việc giải đố, thì cũng sẽ tìm thấy nhiều điều thú vị về nước Anh trong quyển sách này.
        
        Hy vọng rằng quyển sách câu đố này sẽ đem lại nhiều niềm vui cho bạn đọc, từ 8 đến 88 tuổi!
        
        Mời bạn đón đọc.",
        'regular_price' => 65000,
        'sale_price' => 52000,
        'original_price' => 52000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '216'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Sputnik'],
          ['name' => 'Khối lượng', 'value' => '286.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '06/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Học Tập Cũng Cần Chiến Lược',
        'code' => strtoupper(str_random(6)),
        'author' => 'Joe Landsberger ',
        'translator' => 'Nhiều dịch giả ',
        'publisher' => 'Nxb Lao động',
        'summary' => "Bạn không ít lần chán nản vì việc học quá vất vả? Bạn không thể tập trung học khi ngày thi tới gần? Bạn đã từng nghe nói đến ASPIRE, SQ3R…?

        Các phương pháp học hiện đại và hiệu quả đang được áp dụng trên khắp thế giới, đều được mô tả chi tiết và kèm theo nhiều ví dụ dễ hiểu trong Học tập cũng cần chiến lược. Cuốn sách như một người chỉ huy, một “Trái tim Danko”, đưa bạn đến với cách học thông minh và nhàn nhã nhất trong hiện tại và sự nghiệp tương lai.
        
        Là người dạy hay học, ở bậc học phổ thông, đại học, ngoại khóa hay đào tạo từ xa, công chức hay doanh nhân…, bạn đều có thể tìm thấy ở đây từ các kỹ năng, nguyên lý tổng thể đến các mẹo nhỏ được đúc rút trong quá trình học tập thực tế. Chúng không những giúp bạn có một “nghệ thuật” học hành hiệu quả mà còn đưa bạn đến đích bằng đường ngắn nhất.
        
        Cuối cùng ngay cả khi bạn không theo học bất kỳ chương trình nào, kiến thức trong Học tập cũng cần có chiến lược cũng giúp bạn có tư duy mạch lạc hơn trong mọi lĩnh vực cuộc sống.
        
        Hãy để Học tập cũng cần chiến lược trở thành sách gối đầu giường của bạn.
        
        Mời bạn đón đọc.",
        'regular_price' => 99000,
        'sale_price' => 79000,
        'original_price' => 79000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '280'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Luật Trí Não',
        'code' => strtoupper(str_random(6)),
        'author' => 'John Medina',
        'translator' => 'Mai Khanh',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Học tập và làm việc hiệu quả rõ ràng không dừng lại ở lượng kiến thức được truyền thụ trong nhà trường hay trong công việc mà là cách xử lý lượng kiến thức đó như thế nào và sau đó sử dụng chúng ra sao. Nhiều thập kỷ qua, giáo dục đã quên đi phần quan trọng của việc xử lý và sử dụng ấy mà mới giảng dạy trong các trường sư phạm, giúp cho các nhà giáo hiểu được cơ chế nhận thức, cơ chế hoạt động cơ bản, cũng như cơ chế ghi nhớ và tư duy của não người. Đối với nhiều nhà giáo, giảng viên, những kiến thức ấy có lẽ cũng đã phần nào phát huy được tác dụng của họ.

        Thế nhưng, đâu chỉ có người dạy mới cần biết cách vận dụng năng lực trí não sao cho hiệu quả. Người truyền thụ và người được truyền thụ kiến thức đều quan trọng như nhau. Vì vậy mà những kiến thức về não và vận dụng trí não hiệu quả phải trở thành kiến thức cơ bản được giảng dạy rộng rãi, sao cho người dạy và người học đều có khả năng tư duy hiệu quả. Hơn thế nữa, nắm vững quy luật trí não là bước đi đầu tiên trong việc khai phá những tiềm năng to lớn của bộ não, của năng lực tư duy. Đó đã và đang là bước tiến lớn của giáo dục trong giai đoạn hiện nay.
        
        Để theo kịp bước tiến đó, dù ở độ tuổi hay cương vị nào, bạn cũng cần cập nhật và bổ sung ngay cho mình những kiến thức về bộ não của con người và cách thức vận dụng trí não một cách bài bản và hiệu quả. Tối ưu hóa bộ não cũng là tối tưu hóa chất lượng công việc và chất lượng cuộc sống của mỗi người chúng ta.
        
        Mời bạn đón đọc.",
        'regular_price' => 169000,
        'sale_price' => 135000,
        'original_price' => 135000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '448'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '484.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tâm Lý Học Đám Đông',
        'code' => strtoupper(str_random(6)),
        'author' => 'Gustave Le Bon ',
        'translator' => 'Nhiều dịch giả ',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Gustave Le Bon (1841 - 1931) là nhà tâm lí học xã hội nổi tiếng người Pháp với lí thuyết về đám đông. Ông viết về nhiều lĩnh vực và có ảnh hưởng rất lớn trong xã hội Pháp đương thời.

        Le Bon tập trung nghiên cứu về tính cách và tinh thần của các dân tộc, những ưu thế và quá trình phát triển của các chủng tộc. Ông đặt lên hàng đầu khái niệm vô thức tập thể mà chính Freud đã thừa nhận vai trò của nó đối với các nghiên cứu về phân tâm học của mình. Le Bon cho rằng con người được xác định bởi những nhân tố sinh học và tâm lí học. Chủng tộc cũng núp bóng trong mỗi cá nhân cấu thành một dân tộc; nó chi phối mọi hành động, mọi ham muốn, mọi xung năng của anh ta, nó tạo nên vô thức tập thể của anh ta.
        
        Trong khi đó, thời đại của Le Bon đã chứng kiến bản chất di truyền của chủng tộc bị lung lay với sự lớn mạnh của đám đông và những bất ổn về chính trị, xã hội. Ông đã trải nghiệm qua Công xã Paris năm 1871 và nghiên cứu rất kỹ về cuộc Cách mạng Pháp năm 1789 và 1848. Những trải nghiệm ấy mang lại kinh nghiệm thực tiễn cho việc hình thành tư tưởng về đám đông của ông. Tư tưởng ấy được thể hiện rõ rệt nhất trong tác phẩm Tâm lí học đám đông.
        
        Theo Le Bon, những đám đông luôn bị vô thức tác động, họ xử sự như người nguyên thuỷ, người dã man, không có khả năng suy nghĩ, suy luận, mà chỉ cảm nhận bằng hình ảnh, bằng sự liên kết các ý tưởng; họ không kiên định, thất thường, và đi từ trạng thái nhiệt tình cuồng loạn nhất đến ngây dại ngớ ngẩn nhất.
        
        Ngày nay, lí thuyết của Le Bon vẫn chịu một số chỉ trích. Ông được coi là người đặt nền móng cho chủ nghĩa quốc gia hiện đại. Nhưng dù thế nào đi nữa thì Le Bon cũng chỉ là “con đẻ” của thời đại ông. Nỗi lo sợ về nạn bạo lực, sự hoành hành, chứng khủng bố của những đám đông thể hiện rất rõ trong lí thuyết của ông. Ông dường như đã quá phóng đại về nguy cơ bạo lực và sự vô lí của đám đông. Tuy vậy, cuốn sách này thực sự là tác phẩm quan trọng và có ảnh hưởng lớn tới tư tưởng thời đại của Le Bon nói chung cũng như tâm lí học hiện đại nói riêng.
        
        Trong khi đọc cuốn sách này, xin độc giả lưu ý rằng cụm từ chủ nghĩa xã hội (socialisme) mà Le Bon nhắc đến ở đây có hàm ý là chủ nghĩa xã hội không tưởng đã tồn tại từ thế kỉ XVI đến thế kỉ XIX ở Tây Âu, chứ không đồng nghĩa với khái niệm chủ nghĩa xã hội khoa học của Marx và Engels mà Lenin đã vận dụng để xây dựng nên Liên bang Xô viết và trở thành nền tảng tư tưởng của phe xã hội chủ nghĩa được hình thành sau Chiến tranh thế giới thứ hai.
        
        Mời bạn đón đọc.",
        'regular_price' => 123000,
        'sale_price' => 98000,
        'original_price' => 98000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '252'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '242.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Nếu... Thì?',
        'code' => strtoupper(str_random(6)),
        'author' => 'Randall Munroe',
        'translator' => 'Nguyễn Văn Trà , Nguyễn Hoài Anh',
        'publisher' => 'Nxb Lao động',
        'summary' => "Chúng ta được sinh ra với một tư duy phân biệt và bản thể bị giới hạn. Điều này là cần thiết, vì nếu không chúng ta không thể biết được đâu là mình, đâu không phải là mình, và đâu là thứ sẽ là mình. Mình là một thứ vô cùng quan trọng. Nhưng biết được rồi, thì hãy gác nó qua một bên. Gác lại luôn những điều mình vẫn tin là đúng, và thử tự hỏi xem nếu điều ngược lại xảy ra thì sao. Biết đâu điều ngược lại mới là đúng? Biết đâu đó là cách để có thể vượt qua được định kiến của bản thân. Biết đâu khi đó mình sẽ trở nên rộng mở và bao la hơn?

        Hãy đặt câu hỏi. Đặt thật nhiều vào. Trả lời chúng tất nhiên là tốn công tốn sức, và rồi sẽ có lúc bạn cảm thấy hoang mang. Nhưng nhờ thế, bạn thấy yên tâm hơn với những điều hiện tại. Nhưng hay hơn cả, là đặt câu hỏi cho những điều tưởng như không bao giờ tồn tại. Biết đâu một ngày nào đó nó có thực thì sao? Mà cho dù nó không đến, thì bạn cũng đã có trong tay vô số lối đi để tiếp tục cuộc hành trình.
        
        Mời bạn đón đọc.",
        'regular_price' => 129000,
        'sale_price' => 103000,
        'original_price' => 103000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '384'],
          ['name' => 'Kích thước', 'value' => '17 x 23 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '704.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '05/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Đợt Tuyệt Chủng Thứ Sáu',
        'code' => strtoupper(str_random(6)),
        'author' => 'Elizabeth Kolbert',
        'translator' => 'Trần Trọng Hải Minh',
        'publisher' => 'NXB Tri thức',
        'summary' => "Kể từ hơn nửa tỉ năm trước, năm đợt tuyệt chủng đã diễn ra, khi sự đa dạng sống trên trái đất bất ngờ thu hẹp lại. Và phải chăng chúng ta đang bước vào đợt tuyệt chủng kế tiếp - đợt tuyệt chủng thứ sáu - diễn ra trong thế Nhân sinh, một thế địa chất mà con người thống trị trên nhiều khía cạnh.

        Để trả lời nghi vấn này, tác giả đã theo chân các nhà khoa học khảo sát sự tồn tại và xác nhận sự biến mất một số loài ở khắp các vùng trên trái đất. Từ loài ếch vàng ở Panama đến loài voi răng mấu châu Mỹ; từ lũ chim ăng-ca khờ khạo đến loài cúc đá nhỏ bé.
        
        Bên cạnh đó, tác giả cũng đưa chúng ta đến các thử nghiệm và nghiên cứu để tìm ra nguyên nhân của đợt tuyệt chủng thứ sáu. Trong đó, nổi bật nhất chính là những hành động do con người gây ra với các hệ sinh học và địa hóa học của trái đất như: thải quá nhiều carbon dioxide, làm a-xít hóa các đại dương, chặt rừng nhiệt đới.
        
        Các bằng chứng cho thấy, cùng với sự xuất hiện của con người là sự biến mất của một số loài. Con người dường như đang vừa là thủ phạm vừa là nạn nhân của đợt tuyệt chủng kế tiếp này.
        
        'Thật là một quyển sách tuyệt vời, và nó làm sáng tỏa rằng những thay đổi lớn đột ngột có thể xảy ra; chúng không hề nằm ngoài phạm vi khả năng. Chúng từng xảy ra trước đây, và chúng có thể xảy ra lần nữa.' 
        - Cựu Tổng Thống BARACK OBAMA
        
        Mời bạn đón đọc.",
        'regular_price' => 129000,
        'sale_price' => 103000,
        'original_price' => 103000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '464'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tế Bào Gốc - Khám Phá Cùng Nhà Khoa Học',
        'code' => strtoupper(str_random(6)),
        'author' => 'Paul Knoepfler',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'NXB Dân Trí',
        'summary' => "Cuốn sách giúp cho bạn đọc có một cái nhìn bao quát đối với tế bào gốc từ lịch sử phát minh, đến cấu trúc tế bào, cơ chế phân tử, đến bộ gene và di truyền ngoài bộ gene (di truyền ngoại mã).

        Điều đặc biệt ấn tượng là tất cả những kiến thức cơ bản này được diễn giải thật dễ hiểu bằng ngôn ngữ phổ thông, chứ không hàn lâm như trong giới nghiên cứu. Để chuyển tải các khái niệm trừu tượng khó hiểu của thế giới sinh học vi mô đến với người đọc, tác giả đã sử dụng các biện pháp so sánh tương đồng rất tài tình đến nỗi những người có kiến thức trong lĩnh vực, còn thấy hết sức độc đáo thú vị.
        
        Ví dụ: để diễn tả độ phân tán và mất kiểm soát của tế bào gốc khi được đưa vào cơ thể bệnh nhân, tác giả so sánh với hình ảnh hàng triệu con cá hồi bơi vào đại dương mênh mông. Giống như cá hồi, những tế bào gốc đi đâu về đâu trong cơ thể con người, hiện nay chúng ta chưa biết hết được. Còn tệ hơn cả cá hồi, vốn luôn “biết” đường để quay về đúng vị trí chúng đã được sinh ra để thực hiện quá trình sinh sản rồi chết đi, tế bào gốc thì không. Vì vậy, một khi chúng gây tác dụng không mong muốn, thì chúng ta “lực bất tòng tâm”. Cả hai mặt triển vọng và nguy cơ của các liệu pháp tế bào gốc đều được tác giả trình bày và phân tích với nhiều bằng chứng khoa học xác đáng.
        
        Với sự dẫn dắt của tác giả qua góc nhìn rất khách quan, bạn sẽ thu thập nhiều kiến thức đa chiều để tự đánh giá và định hướng cho chính mình và người thân khi muốn tìm một liệu pháp tế bào gốc khả thi nhằm cải thiện sức khỏe hay chất lượng cuộc sống. Thậm chí nếu không đủ thời gian để đi hết chiều dài cuốn sách thì bạn vẫn có thể sử dụng nó như một nguồn tư liệu để tra cứu và tìm tòi sâu hơn khi cần. Vì vậy, ngoài việc chuyển ngữ và chú giải nội dung của cuốn sách, nhóm dịch còn tạo ra một danh sách các thuật ngữ chuyên ngành Việt-Anh phổ biến, thông dụng để bạn đọc có thể tham khảo. Trong đó chúng tôi có đề xuất một vài từ tiếng Việt mới cho những thuật ngữ tiếng Anh mới hoặc vốn ít được sử dụng trong tiếng Việt. Danh sách các từ này nằm ở mục phụ lục của cuốn sách.
        
        Mời bạn đón đọc.",
        'regular_price' => 199000,
        'sale_price' => 159000,
        'original_price' => 159000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '480'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '990.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '04/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => '6 Phát Minh Làm Nên Thời Đại',
        'code' => strtoupper(str_random(6)),
        'author' => 'Steven Johnson ',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Steven Johnson đích thực là chuyên gia bậc thầy của lịch sử ý tưởng. Trong cuốn sách này, ông chỉ tập trung vào sáu công nghệ và khám phá các phân nhánh của chúng, cả mặt tốt lẫn không tốt. Ông đã tạo ra biểu trưng hình ảnh chim ruồi cho các loại hình phát minh mà mình quan tâm: sự đồng tiến hóa của hoa và côn trùng – kẻ không mời từ một trật tự sáng tạo khác. Cuốn sách này là tập hợp đầy đủ những “phát minh chim ruồi” hoàn toàn bất ngờ. Sáu chủ đề được đưa ra là: Thủy tinh, Làm lạnh, Âm thanh, Làm sạch, Thời gian, Ánh sáng.

        Có những câu chuyện nhà phát minh không nhận ra phạm vi thực sự khám phá của mình, như Édouard-Léon Scott de Martinville, người vào năm 1850 đã phát minh ra máy ký âm nhưng không có thiết bị phát lại. Ông tin rằng, ngày nào đó chúng ta sẽ giải mật chúng như cách đọc nốt nhạc. Máy quét sóng siêu âm được phát triển dựa trên thiết bị tìm kiếm tàu đắm Titanic. Nhiều năm sau, công nghệ lại kết hợp với chính sách một con của Trung Quốc để tạo thành sự mất cân bằng giới tính khốc liệt trong xã hội trọng nam. Các chủ đề và hướng tiếp cận của Johnson được lựa chọn đều gây sự khâm phục đáng kinh ngạc. Một trong số đó là chuyện vào thập niên 1850, 1860, cả thành phố Chicago được nâng lên bằng kích vít để đặt hệ thống ống cống ngầm.
        
        Phương pháp mạnh bạo này vô cùng cần thiết vì Chicago rất phẳng; không có độ dốc tự nhiên để thoát nước và thành phố, trung tâm buôn bán thịt náo nhiệt miền trung tây, điều táo bạo cần thiết để giải vây thành phố khỏi rác thải độc hại. Chicago một lần nữa lại xuất hiện ở chương “Làm lạnh”: đó là đường ô tô ray cho xe đông lạnh chờ thịt từ đồng bằng đi khắp nước Mỹ. Johnson nhấn mạnh rằng nhiều phát minh không phải là kết quả của “phút Eureka” mà là sự chín muồi của một tiến trình dài bao gồm một mạng lưới các nhà phát minh và doanh nghiệp. Ông đã cố xoay xở và cuối cùng đã tìm ra cách định nghĩa khoảnh khắc này. Dữ liệu số được truyền dẫn lần đầu tiên năm 1943 qua một đường dây mật SIGSALYY được Alan Turing và Phòng thí nghiệm Bell phát triển: Turing là một nhà sáng chế thiên tài.
        
        Đây là một cuốn sách ngắn, khá dễ đọc, thú vị và đầy thách thức với những điều kỳ diệu mỗi ngày quanh ta.
        
        Mời bạn đón đọc.",
        'regular_price' => 165000,
        'sale_price' => 132000,
        'original_price' => 132000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '300'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '04/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Thiên Nga Đen',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nassim Nicholas Taleb',
        'translator' => 'Cam Thảo, Hoàng Trung',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Trước khi khám phá ra thiên nga đen tồn tại trên đời (ở Úc), người ta vẫn tin rằng tất cả chim thiên nga trên đời đều có màu trắng. Phát hiện bất ngờ này đã thay đổi toàn bộ thế giới quan của nhân loại (về thiên nga).

        Chúng ta không biết rất nhiều thứ nhưng lại hành động như thể mình có khả năng dự đoán được mọi điều. Và trong cuốn sách này, tác giả Nassim Nicholas Taleb đã đi sâu vào khai thác những sai lầm của tư tưởng cố hữu ấy. Theo ông, “thiên nga đen” là một biến cố tưởng chừng như không thể xảy ra với ba đặc điểm chính: không thể dự đoán, có tác động nặng nề và sau khi nó xảy ra, người ta lại dựng lên một lời giải thích để khiến nó trở nên ít ngẫu nhiên hơn, dễ dự đoán hơn so với bản chất thật của nó. Thành công đáng kinh ngạc của Facebook có thể được coi là một “thiên nga đen”, việc nước Anh rời khỏi Liên minh châu Âu cũng là một “thiên nga đen”. Thiên nga đen luôn ẩn hiện trong mọi mặt của cuộc sống với những tác động khó lường, theo cả hướng tiêu cực và tích cực.
        
        Tinh tế, táo bạo nhưng không kém phần thú vị, Thiên Nga Đen chắc chắn là cuốn sách không thể bỏ qua cho những ai đam mê hiểu biết. Và cuốn sách này, bản thân nó cũng chính là một thiên nga đen…
        
        Mời bạn đón đọc.",
        'regular_price' => 269000,
        'sale_price' => 215000,
        'original_price' => 215000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '476'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '726.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Phương Pháp Đọc Sách Hiệu Quả',
        'code' => strtoupper(str_random(6)),
        'author' => 'Charles Van Doren, Mortimer J.Adler',
        'translator' => 'Hải Nhi',
        'publisher' => 'Nxb Lao động - Xã hội',
        'summary' => "Đọc sách như một nghệ thuật, ngay từ lần xuất bản đầu tiên năm 1940, đã được đánh giá là cuốn sách hướng dẫn đọc hiểu lý thú và hiệu quả nhất dành cho độc giả phổ thông. Cuốn sách đã nhanh chóng trở thành một tác phẩm kinh điển về cách đọc sách thông minh.

        Đọc sách như một nghệ thuật giúp bạn khám phá và lĩnh hội các cấp độ đọc khác nhau, từ đọc sơ cấp, đọc lướt có hệ thống đến đọc kiểm soát và đọc siêu tốc. Bạn có thể áp dụng các cấp độ này cho việc phân loại, chụp X-quang hay phê bình sách, tùy theo nhu cầu và mục đích của mình. Nhờ các kỹ năng đọc được hệ thống ở đây, bạn sẽ biết cách tiếp cận và nắm bắt tất cả các loại văn bản, dù đó là sách thực hành, khoa học, toán học, triết học, lịch sử hay các tác phẩm văn học.
        
        Đọc sách như một nghệ thuật, hơn hết, thúc đẩy ta trở thành độc giả say mê. Cuốn sách là người bạn đường không thể thiếu của mỗi người trên hành trình đối thoại để học hỏi, khám phá, tu thân và trưởng thành, như Decartes đã nói: 'Đọc sách là được trò chuyện với những người thành đạt nhất của các thế kỷ đã qua'.
        
        Mời bạn đón đọc.",
        'regular_price' => 139000,
        'sale_price' => 111000,
        'original_price' => 111000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '360'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '396.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Khởi Đầu Những Phát Minh Lỗi Lạc Của Nhân Loại',
        'code' => strtoupper(str_random(6)),
        'author' => 'Kevin Ashton',
        'translator' => 'Trần Trọng Hải Minh',
        'publisher' => 'Nxb Lao động',
        'summary' => "“Sáng tạo là Bản năng của con người.”

        Kevin Ashton, chuyên gia công nghệ tiên phong là người đã trải qua đủ mọi thử thách trong việc sáng tạo điều gì đó mới mẻ. Trong quyển sách này, ông sẽ dẫn chúng ta qua những tạo vật vĩ đại nhất và hé lộ một sự thật bất ngờ về người đã tạo ra chúng – từ một phòng thí nghiệm nơi khám phá ra bí mật của DNA, cho đến một tiệm xe đạp nơi anh em nhà Wright quyết định tạo ra máy bay.
        
        Ông cũng dẫn chứng nhiều ví dụ ấn tượng từ những cá nhân lỗi lạc, nhưng thất bại vô số nhưng cần thiết để tạo nên bước đột phá. Qua các ví dụ từ Mozart đến Apple, đây là cuốn sách phải đọc đối với những nhà chế tạo và phát minh, những người mong muốn đem lại những điều mới mẻ hơn, tốt đẹp hơn cho nhân loại.
        
        Mời bạn đón đọc.",
        'regular_price' => 188000,
        'sale_price' => 150000,
        'original_price' => 150000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '576'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Zenbook'],
          ['name' => 'Khối lượng', 'value' => '550.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tại Sao Người Do Thái Xuất Sắc?',
        'code' => strtoupper(str_random(6)),
        'author' => 'Yūrō Teshima',
        'translator' => 'Lê Tiến Thành',
        'publisher' => 'NXB Hồng Đức',
        'summary' => 'Nhắc đến người Do Thái, người ta sẽ nghi ngay đến nhân vật gã con buôn Shylock chuyên cho vay nặng lãi trong vở kịch "Người lái buôn thành Venice" của W. Shakespeare, nghĩ đến chúa Jesus của Kitô giáo, đến các nhà khoa học lừng danh Albert Einstein, Sigmund Freud..., đồng thời, người ta cũng liên tưởng đến sự giàu có, sự khôn ngoan, giữ gìn truyền thống, tinh thần đoàn kết của người Do Thái...

        "Tại sao người Do Thái xuất sắc?" là tác phẩm nghiên cứu nhiều năm của học giả Nhật bản Yūrō Teshima về lịch sử dân tộc Do Thái, về cách mà người Do Thái sinh tồn cùng nhiều phương diện trong đời sống của họ, về lối sống và lối nghĩ của người Do Thái trong các lĩnh vực kinh tế, giáo dục, xã hội, luân lý, lịch sử và tôn giáo...
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 88000,
        'sale_price' => 88000,
        'original_price' => 88000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '240'],
          ['name' => 'Kích thước', 'value' => '13.5 x 21 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Văn Lang'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tư Duy Đúng Cách - Tư Duy Khách Quan',
        'code' => strtoupper(str_random(6)),
        'author' => 'Charles Phillips',
        'translator' => 'Anh Chiến',
        'publisher' => 'Nxb Trẻ',
        'summary' => 'Tư duy đúng cách là bộ sách kiến thức bách khoa được trình bày theo bố cục chặt chẽ, gồm những câu đố khơi gợi trí thông minh kèm theo từng lời gợi ý hữu dụng, với ba mức độ từ dễ đến khó. Qua đó, người đọc sẽ vô cùng ngạc nhiên khi thấy khả năng suy luận thực tiễn, cũng như óc phán đoán, sáng tạo của mình đã cải thiện đáng kể. Đồng thời nhận ra không khó để có được những tư duy khoa học sáng suốt nếu biết cách rèn luyện trí não đúng phương pháp. Bộ tám cuốn gồm:

        Tư duy khách quan là một trong những tựa sách thuộc bộ sách Tư duy đúng cách thông qua các câu đố thông minh và thử thách sáng tạo, sách gợi mở cho người đọc phương pháp suy nghĩ đúng đắn, vượt qua những hạn chế ràng buộc để có cái nhìn khách quan khi phải đối diện với tình huống lựa chọn thực tế. Nhờ vậy, độc giả sẽ không còn phải thấy băn khoăn khi đưa ra quyết định nên làm theo cách của mình hay phải nghe theo lời người khác.  
        
        Mời bạn đón đọc.',
        'regular_price' => 35000,
        'sale_price' => 21000,
        'original_price' => 21000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '100'],
          ['name' => 'Kích thước', 'value' => '13 x 19 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Trẻ'],
          ['name' => 'Khối lượng', 'value' => '110.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '28/07/2015'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Lược Sử Vạn Vật',
        'code' => strtoupper(str_random(6)),
        'author' => 'Bill Bryson',
        'translator' => 'Khương Duy, Hán Ngọc',
        'publisher' => 'Nxb Khoa học xã hội',
        'summary' => 'Lược sử vạn vật là cuốn sách phổ biến khoa học trình bày một cách ngắn gọn lịch sử nghiên cứu khoa học tự nhiên, những thành tựu khoa học trong các lĩnh vực khoa học tự nhiên chính: vật lý, hóa học, sinh học, địa chất, thiên văn… với nhiều tên tuổi, giai thoại và sự thật.

        Với cuốn sách này, người đọc sẽ biết được những giới hạn trong tri thức của con người về vũ trụ và cả về chính trái đất. Đây là cuốn sách khoa học phổ thông bán chạy nhất nước Anh năm 2005 với hơn 300.000 bản in. Nhà phê bình người Anh, Craig Brown thậm chí đã nhận xét rằng tác phẩm này xứng đáng bán được 500.000.000.000 cuốn (theo cách nói của chính Bryson, “bằng với số proton có trong một dấu chấm câu”).
        
        William McGuire “Bill” Bryson, tác giả cuốn sách Lược sử vạn vật – A Short History of Nearly Everything sinh năm 1951, là tác giả nổi tiếng hàng đầu trong thể loại non-fiction ở Bắc Mỹ, với vô số người hâm mộ trên khắp thế giới.
        
        Mời bạn đón đọc.',
        'regular_price' => 219000,
        'sale_price' => 175000,
        'original_price' => 175000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '724'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '814.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Khám Phá Thế Giới - Vương Quốc Của Những Con Số',
        'code' => strtoupper(str_random(6)),
        'author' => 'Denis Guedj',
        'translator' => 'Hà Dương Tường',
        'publisher' => 'NXB Kim Đồng',
        'summary' => 'Ngày nay, ý tưởng về số hiển nhiên là kết quả của một quá trình hoạt động trừu tượng của tư duy. Theo dòng lịch sử, để hình dung những số tự nhiên, con người đã sáng tạo ra một tập hợp những biểu tượng số – “các chữ số” – và những thiết bị ít nhiều hữu hiệu để biểu đạt chúng, – các bảng tính, bàn tính gảy, hay các nút dây của người Inca. Vào thế kỉ V, thiên tài toán học của người Ấn Độ đã đề ra cách viết “dùng vị trí” các con số, chỉ sử dụng 10 con số trong đó có số không (0, 1, 2, 3, 4, 5, 6, 7, 8, 9), có thể biểu đạt tất cả các con số. Cách viết số kì diệu này xoá bỏ khoảng cách giữa chữ số và tính toán.

        Phương Tây, sau nhiều thế kỉ ngập ngừng, đã chấp nhận cách viết này của người Ấn Độ, được những nhà toán học Arập phổ biến. Nghề in mới hình thành thời đó đã góp phần áp đặt và truyền bá việc sử dụng những con số “Ấn Độ – Arập”. Số tương đối, số hữu tỉ, số thực, số ảo, số phức, thậm chí cả số siêu việt và siêu thực: vương quốc các con số mở rộng lãnh địa của mình theo sự gia tăng của nhu cầu tính toán và tiến bộ của lí thuyết. Denis Guedj mời gọi chúng ta cùng khám phá sự phát sinh phi thường của một trong những sáng tạo đẹp nhất của loài người: NHỮNG CON SỐ.
        
        Mời bạn đón đọc.',
        'regular_price' => 80000,
        'sale_price' => 80000,
        'original_price' => 80000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt '],
          ['name' => 'Số trang', 'value' => '176'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Kim Đồng'],
          ['name' => 'Khối lượng', 'value' => '308.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Xây Dựng Xã Hội Học Tập',
        'code' => strtoupper(str_random(6)),
        'author' => 'Bruce C. Greenwald, Joseph E. Stiglitz',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'NXB Chính Trị Quốc Gia',
        'summary' => 'Từ khi được xuất bản, cuốn sách Xây dựng xã hội học tập: Cách tiếp cận mới cho tăng trưởng, phát triển và tiến bộ xã hội đã trở thành một tài liệu hữu ích cho độc giả - những người luôn dành sự ủng hộ đối với những chính sách thúc đẩy sự tiến bộ về khoa học và công nghệ của chính phủ. Cuốn sách là một tác phẩm đầy thuyết phục cho thấy mức sống của chúng ta được cải thiện đáng kể như thế nào là kết quả của việc học cách để học tập, và đưa ra những lý giải làm thế nào mà các quốc gia phát triển và các quốc gia đang phát triển đều có thể xây dựng được một nền kinh tế học tập kiểu mới.

        Với lối viết gần gũi, dễ hiểu, cuốn sách Xây dựng xã hội học tập: Cách tiếp cận mới cho tăng trưởng, phát triển và tiến bộ xã hội (Ấn bản dành cho độc giả) đã truyền tải được thông điệp chính cũng như những phương hướng về mặt chính sách.
        
        Cuốn sách làm sáng tỏ quan điểm cho rằng xây dựng một xã hội học tập đòi hỏi chính phủ phải ban hành được những chính sách có chất lượng trên các lĩnh vực thương mại, công nghiệp, sở hữu trí tuệ và các lĩnh vực quan trọng khác. Luận điểm chính của cuốn sách - rằng mọi chính sách đều ảnh hưởng tới học tập - có ý nghĩa quan trọng đối với những chính phủ còn chưa quan tâm đến những cách thức đổi mới mà họ có thể vận dụng để thúc đẩy nền kinh tế của đất nước tiến lên phía trước.
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 212000,
        'sale_price' => 170000,
        'original_price' => 170000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '556'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '858.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '11/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Bài Học Phần Lan 2.0',
        'code' => strtoupper(str_random(6)),
        'author' => 'Pasi Sahlberg',
        'translator' => 'Đặng Việt Vinh',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Làm thế nào để từ một đất nước bị tàn phá nặng nề trong Thế chiến hai, cơ sở vật chất lạc hậu, nền chính trị biến động với cuộc đấu của các Đảng phái… Phần Lan vươn mình trở thành đất nước có nền giáo dục số 1 hành tinh?

        "Bài học Phần Lan 2.0" là bản cập nhật có chỉnh sửa của "Bài học Phần Lan" – tác phẩm của nhà sư phạm Phần Lan Pasi Sahlberg.
        
        Sách là câu chuyện về quá trình xây dựng nền sư phạm Phần Lan trong 4 thập kỷ qua. Tác giả nhấn mạnh vào các giải pháp mang tính cách mạng của Phần Lan, khác biệt của chúng với nước Mỹ và các quốc gia khác trên thế giới. 
        
        Phần Lan chứng tỏ rằng chính sách lấy giáo viên là trung tâm, chuyên nghiệp hóa đội ngũ giáo viên, xây dựng niềm tin giữa nhà trường và xã hội, đầu tư vì nền giáo dục công bằng thay vì thành tích, đã cực kì thành công, biến Phần Lan thành hình mẫu giáo dục của mọi quốc gia trên thế giới.
        
        "Bài học Phần Lan 2.0" sẽ là cuốn sách gối đầu giường của mọi nhà sư phạm và phụ huynh Việt Nam. Các ý tưởng trong sách gần như tưởng phản hoàn toàn với tình trạng chạy theo thành tích, cải cách liên miên nhưng bế tắc, gây sức ép học hành lên con cái, của nhà trường và phụ huynh nước ta.
        
        Mời bạn đón đọc.',
        'regular_price' => 169000,
        'sale_price' => 135000,
        'original_price' => 135000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '432'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '506.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'An Toàn Khi Online',
        'code' => strtoupper(str_random(6)),
        'author' => 'Louie Stowell',
        'translator' => 'Nguyễn Minh',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Tuần này bạn đã check in ở bao nhiêu quán? Đã selfie bao nhiêu lần? Lần cuối bạn vào WC mà không mang theo smartphone là từ bao giờ? Nếu bạn thấy cả nguồn sống bỗng chốc thu bé lại vừa bằng một màn hình thì bạn không cô đơn đâu. Internet đã chạm đến mọi ngóc ngách trong cuộc sống của chúng ta. Thế giới đó thật kỳ diệu với nguồn tri thức bất tận, và muôn màu vẻ cuộc sống đang hiện lên từng giây từng phút. Nhưng còn những mặt trái của nó, những những mê cung tăm tối đầy cạm bẫy với đủ loại quái thú, nào spammer, nào troll, hay cả những kẻ ấu dâm đáng sợ?

        Làm thế nào để có thể lên mạng thoải mái, thỏa sức “quẩy” với Internet mà không bị “sấp mặt luôn” với những nguy cơ đầy rẫy trên các mạng xã hội và trạng mạng? Cuốn sách bạn đang cầm trên tay sẽ cung cấp cho bạn tất cả những đấu pháp và mưu mẹo cần thiết để hòa nhập vào thế giới ảo một cách an toàn và tích cực nhất.
        
        Mời bạn đón đọc.",
        'regular_price' => 49000,
        'sale_price' => 39000,
        'original_price' => 39000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '144'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '176.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '01/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Ngủ Ơi Là Ngủ - 5 Tiếng Là Đủ',
        'code' => strtoupper(str_random(6)),
        'author' => 'Satoshi Tsubota',
        'translator' => 'Hương Linh',
        'publisher' => 'Nxb Công Thương',
        'summary' => 'Bạn đang trải qua quãng thời gian lãng phí  ở “trên giường”, mỗi ngày 20 phút.

        Gửi tới bạn – người đang vướng phải những phiền muộn sau:
        
        - Ngủ bao lâu cũng không hết cảm giác mệt mỏi
        
        - Luôn thức dậy buổi sáng trong trạng thái uể oải
        
        - Dễ bị tỉnh giấc, trằn trọc cho tới nửa đêm
        
        - Không đủ thời gian dành cho giấc ngủ
        
        - Trải qua mỗi ngày với quỹ thời gian eo hẹp
        
        Và bạn cũng nhận ra điều đó, bạn cũng biết những người thành công đều ngủ ít hơn bình thương nhưng năng suất công việc của họ vẫn luôn hiệu quả. Bạn cũng cố gắng rèn luyện bản thân minh nhưng có thể vì 2 lý do dưới đây sẽ làm bạn bỏ cuộc: 
        
        - Không thể thức dậy sớm, dù cố gắng đến mấy cũng không duy trì được
        
        - Buồn ngủ trong suốt cả một ngày nếu như dậy sớm. 
        
        Mức độ tốt và xấu của giấc ngủ không thể chỉ đo bằng “thời gian”. Giấc ngủ sẽ được quyết định bởi phép nhân: “Thời gian” x “Chất lượng”.
        
        Nếu có thể lĩnh hội “Phương pháp ngủ ngon trong 5 tiếng” được giới thiệu trong cuốn sách này, cho dù thời gian dành cho giấc ngủ của bạn có ngắn đi chăng nữa, cũng sẽ không có chuyện bạn phải trải qua một buổi sáng khổ sở, không tỉnh táo, mệt mỏi vẫn còn chưa biến mất, và làm việc kém hiệu quả do cả ngày trong trạng thái buồn ngủ. 
        
        “Phương pháp ngủ ngon trong 5 tiếng” của cuốn sách này truyền đạt tới bạn đọc kỹ thuật sở hữu tính hợp lý cả về y học lẫn sinh lý học để trở thành “người ngủ ngắn”.
        
        Phương pháp ngủ ngon trong 5 tiếng tức là, cho dù bạn chỉ ngủ trong một thời gian ngắn thôi, cả não bộ và cơ thể vẫn có cảm giác tràn đầy sinh khí, đôi mắt và tinh thần hoàn toàn trong trạng thái tỉnh táo. Nhờ đó, mọi hoạt động trong ngày đều đạt hiệu quả cao nhất. Xin được giới thiệu bí quyết giúp bạn có một giấc ngủ sâu và ngắn, nâng cao tối đa “chất lượng” giấc ngủ.
        
        Bên cạnh đó, kỹ thuật “Thức dậy lúc 5 giờ sáng” mà tác giả sẽ đề cập tới chính là phương pháp cải thiện giấc ngủ vô cùng hiệu quả dành cho những người thường ngủ khoảng 7 tiếng một ngày, giúp họ rút ngắn thời gian ngủ theo kiến thức y học đúng đắn và khoa học.
        
        “Phương pháp ngủ ngon trong 5 tiếng” được tạo thành từ các bước sau đây: 
        
        Bước 1 – Nâng cao hiệu quả giấc ngủ bằng 9 kỹ thuật “Ngủ ngay lập tức – Dậy ngay lập tức” 
        Bước 2 – Nâng cao “chất lượng” giấc ngủ, phục hồi triệt để não bộ và cơ thể 
        Bước 3 – Áp dụng năm phương pháp “ngủ tạm thời” để tỉnh táo suốt cả ngày. 
        Bước 4 – Tạo thói quen “Thức dậy lúc 5 giờ sáng” trong vòng hai tháng 
        Tuy nhiên, không phải chỉ đơn giản cắt giảm thời gian ngủ là được. Điều quan trọng là, cho dù chỉ ngủ ngắn, cơ thể vẫn khỏe mạnh, không những thế còn ngập tràn năng lượng để tập trung vào những việc khác. Mục đích của cuốn sách này chính là như vậy. Chỉ cần áp dụng triệt để những điều được ghi trong cuốn sách này, bạn hoàn toàn có thể trở thành người ngủ ngắn.
        
        Mời bạn đón đọc.',
        'regular_price' => 69000,
        'sale_price' => 55000,
        'original_price' => 55000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '236'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Thái Hà'],
          ['name' => 'Khối lượng', 'value' => '264.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '26/01/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Tâm Lý Học & Đời Sống',
        'code' => strtoupper(str_random(6)),
        'author' => 'Richard J. Gerrig, Philip G. Zimbardo',
        'translator' => 'Kim Dân',
        'publisher' => 'NXB Hồng Đức',
        'summary' => "Hiểu biết tâm lý con người là một lợi thế trong các hoạt động tương tác xã hội. Nghiên cứu và ứng dụng thành tựu của môn khoa học này cũng góp phần quan trọng vào việc nâng cao chất lượng sống về mặt tinh thần, làm tăng tiến sự giao lưu giữa các cộng đồng văn hóa và phát triển xã hội loài người.\nTâm lý học và đời sống là cuốn sách đồ sộ, đề cập và đi sâu khai thác rất nhiều chủ đề về tâm lý con người dựa trên kết quả của hàng trăm công trình thực nghiệm do các nhà nghiên cứu tâm lý thực hiện. Đó là những nghiên cứu đáng tin cậy được tập hợp từ nhiều nơi trên khắp thế giới, ở nhiều thời điểm lịch sử cho đến thế kỷ 21, trên nhiều quy mô khác nhau. Các chủ đề tâm lý con người, từ nhận thức đến hành vi chủ quan cũng như tác động của hoàn cảnh, đều được phân tích đầy đủ trong cuốn sách này. Đây sẽ là một tài liệu tổng quát và chuyên sâu giúp bạn nghiên cứu các vấn đề tâm lý học trong đời sống hàng ngày một cách có hệ thống và dễ tiếp thu nhất.\nMời bạn đón đọc.",
        'regular_price' => 370000,
        'sale_price' => 370000,
        'original_price' => 370000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '664'],
          ['name' => 'Kích thước', 'value' => '19 x 27 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Văn Lang'],
          ['name' => 'Khối lượng', 'value' => '1716.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);
      Product::create([
        'name' => 'Phát Minh Cuối Cùng',
        'code' => strtoupper(str_random(6)),
        'author' => 'James Barrat',
        'translator' => 'Chu Kiên',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Trí tuệ nhân tạo giúp bạn chọn những cuốn sách bạn mua, những bộ phim bạn xem, và thậm chí những người bạn hẹn hò. Nó có trong điện thoại thông minh của bạn và tới đây sẽ lái chiếc xe của bạn. Nó thực hiện hầu hết các giao dịch trên Wall Street, và kiểm soát cơ sở hạ tầng điện, nước và giao thông. Nhưng trí tuệ nhân tạo cũng có thể đe dọa sự tồn tại của con người.

        Chỉ trong một thập kỷ, AI có thể đạt ngang ngửa và sau đó vượt qua trí thông minh của con người. Các công ty và cơ quan chính phủ đang rót hàng tỷ đô-la để thu được một AI với trí thông minh ở cấp độ con người. Một khi AI đã phát triển đến mức này, các nhà khoa học lập luận rằng, nó sẽ có những động lực sống giống như con người. Chúng ta có thể sẽ buộc phải cạnh tranh với một kẻ thù ngoan cường hơn, mạnh mẽ hơn và khác biệt hơn chúng ta tưởng tượng.
        
        Thông qua việc phỏng vấn với những người có tầm nhìn xa về công nghệ, các cơ quan giám sát công nghiệp, và những hệ thống AI, cuốn sách Phát minh cuối cùng khám phá những nguy cơ của việc theo đuổi AI cao cấp. Cho đến nay, trí thông minh của con người không có đối thủ. Liệu chúng ta có thể cùng tồn tại với những thứ mà trí tuệ của chúng ta trở nên nhỏ bé hơn hẳn? Và liệu chúng sẽ cho phép chúng ta cùng tồn tại?
        
        “Cuốn sách trần trụi về chủ đề quan trọng nhất của thế kỷ này và có thể còn hơn thế - sự tồn vong của nhân loại. Ước gì nó là khoa học viễn tưởng nhưng tôi biết rằng không phải vậy”. 
        
        - Jaan Tallinn, đồng sáng lập Skype
        
        “Câu chuyện hấp dẫn về thách thức quan trọng nhất của con người. Một Mùa xuân im lặng của thế kỷ 21”. 
        
        - Michael Vassar, cựu Chủ tịch, Viện nghiên cứu điểm kỳ dị
        
        Mời bạn đón đọc.",
        'regular_price' => 185000,
        'sale_price' => 148000,
        'original_price' => 148000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '436'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '660.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '02/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 17
      ]);

      //Tu truyen - Hoi ky
      Product::create([
        'name' => 'Khởi Sinh Của Cô Độc',
        'code' => strtoupper(str_random(6)),
        'author' => 'Paul Auster ',
        'translator' => 'Phương Huyên',
        'publisher' => ' Nxb Trẻ',
        'summary' => "“Khởi sinh của cô độc” là tác phẩm gây được tiếng vang lớn của Paul Auster bao gồm hai phần riêng biệt là viết về cha trong “Chân dung một người vô hình” và về những trải nghiệm của bản thân trong “Sách của kí ức”.

        Tác phẩm là sự tái hiện quá khứ theo một cách không giống ai, theo một chiều không gian không ai của tác giả. Chịu ảnh hưởng sâu sắc từ phân tâm học và thuyết tiên nghiệm, tác phẩm là sự pha trộn giữa những trải nghiệm của bản thân, gia đình và chủ nghĩa vô thường, để từ đó tìm kiếm nhân dạng và ý nghĩa của đời người.
        
        Mời bạn đón đọc.",
        'regular_price' => 120000,
        'sale_price' => 96000,
        'original_price' => 120000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '276'],
          ['name' => 'Kích thước', 'value' => '13 x 20 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Trẻ'],
          ['name' => 'Khối lượng', 'value' => '264.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 11
      ]);

      Product::create([
        'name' => 'Một Lít Nước Mắt',
        'code' => strtoupper(str_random(6)),
        'author' => 'Kito Aya',
        'translator' => 'Trọng Đức',
        'publisher' => 'Nxb Hội Nhà Văn',
        'summary' => "
        'Hãy sống! Mình muốn hít thở thật sâu dưới trời xanh.'

        Một tâm hồn nhạy cảm.
        
        Một gia đình ấm áp.
        
        Một căn bệnh hiểm nghèo.
        
        Một cơ thể tật nguyền.
        
        Đó là những gì Kito Aya có trong hơn 20 năm cuộc đời. Với Aya, tương lai của cô là một con đường hẹp, và càng ngày nó càng trở nên hẹp hơn. Căn bệnh ngăn trở Aya khỏi tất cả những ước mơ và dự định, thậm chí việc tự mình bước ra ngoài phố để đi tới hiệu sách cũng trở thành một khao khát cháy bỏng. Hơn 6 năm kiên trì viết nhật ký, cô kể về những cảm nhận và suy tư của bản thân trong suốt quãng thời gian chứng kiến cơ thể mình từng bước từng bước gánh lấy một số phận đau đớn. Nhưng từ trong nước mắt và tật nguyền, cuộc tìm kiếm giá trị bản thân của cô đã làm rung động cả Nhật Bản.
        
        'Có những người mà sự tồn tại của họ giống như không khí, êm dịu, nhẹ nhàng, chỉ khi họ mất đi người ta mới nhận ra họ quan trọng nhường nào. Mình muốn trở thành một sự tồn tại như thế.'
        
        Mời bạn đón đọc.",
        'regular_price' => 72000,
        'sale_price' => 58000,
        'original_price' => 72000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '292'],
          ['name' => 'Kích thước', 'value' => '14 x 19 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '330.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 11
      ]);

      // Truyen dai
      Product::create([
        'name' => 'Ngồi Khóc Trên Cây',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nguyễn Nhật Ánh',
        'translator' => '',
        'publisher' => 'Nxb Trẻ',
        'summary' => "Mở đầu là kỳ nghỉ hè tại một ngôi làng thơ mộng ven sông với nhân vật là những đứa trẻ mới lớn có vô vàn trò chơi đơn sơ hấp dẫn ghi dấu mãi trong lòng.

        Mối tình đầu trong veo của cô bé Rùa và chàng sinh viên quê học ở thành phố có giống tình đầu của bạn thời đi học? Và cái cách họ thương nhau giấu giếm, không dám làm nhau buồn, khát khao hạnh phúc đến nghẹt thở có phải là câu chuyện chính?
        
        “Nồng nàn lên với
        
        Cốc rượu trên tay
        
        Xanh xanh lên với
        
        Trời cao ngàn ngày
        
        Dài nhanh lên với
        
        Tóc xõa ngang mày
        
        Lớn nhanh lên với
        
        Bé bỏng chiều nay”
        
        Bạn sẽ được tác giả dẫn đi liền một mạch trong một thứ cảm xúc rưng rưng của tình yêu thương. Bạn sẽ thấy may mắn vì đang đuợc sống trong cuộc sống này, thấy yêu thế những tấm tình người… tất cả đều đẹp hồn hậu một cách giản dị.
        
        Với cuốn sách này, một lần nữa người đọc lại được Nguyễn Nhật Ánh tặng món quà quý giá: lòng tin vào điều tốt có thật trên đời.
        
        Mời bạn đón đọc.",
        'regular_price' => 110000,
        'sale_price' => 88000,
        'original_price' => 110000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '342'],
          ['name' => 'Kích thước', 'value' => '13 x 20 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nxb Trẻ'],
          ['name' => 'Khối lượng', 'value' => '330.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '09/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 9
      ]);

      Product::create([
        'name' => 'Cô Gái Đến Từ Hôm Qua',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nguyễn Nhật Ánh',
        'translator' => '',
        'publisher' => 'Nxb Trẻ',
        'summary' => "Thông tin tác giả
        Nguyễn Nhật Ánh
        Nhà văn Nguyễn Nhật Ánh Nguyễn Nhật Ánh là tên và cũng là bút danh của một nhà văn Việt Nam chuyên viết cho tuổi mới lớn. Ông sinh ngày 7 tháng 5 năm 1955 tại huyện Thăng Bình, Quảng Nam. Năm 13 tuổi ông đăng báo bài thơ đầu tiên. Tác phẩm đầu tiên in thành sách là một tập thơ: Thành phố tháng tư ...
        Vào trang riêng của tác giả
        Xem tất cả các sách của tác giả
        ",
        'regular_price' => 80000,
        'sale_price' => 60000,
        'original_price' => 80000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '222'],
          ['name' => 'Kích thước', 'value' => '13 x 20 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nxb Trẻ'],
          ['name' => 'Khối lượng', 'value' => '264.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '22/06/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 9
      ]);

      //Phong su - Ky su
      Product::create([
        'name' => 'Hoàng Đế',
        'code' => strtoupper(str_random(6)),
        'author' => 'Ryszard Kapuscinski',
        'translator' => 'Nguyễn Chí Thuật ',
        'publisher' => 'Nxb Lao động',
        'summary' => "Hoàng đế là cuốn sách không chỉ mở đầu sự nghiệp quốc tế của phóng sự gia tầm cỡ nhất Ba Lan, mà còn đưa thể loại phóng sự lên ngang tầm văn học cao cấp.

        Thể loại văn học rất đặc thù, hay gọi cách khác là viết theo văn phong báo chí, hoặc phóng sự, đã trở thành dấu hiệu nhận biết nhà thơ, nhà văn và nhà du hành Ba Lan Ryszard Kapuściński. Chắc hẳn bản thân Ryszard Kapuściński cũng không hề nghĩ rằng chính phóng sự đã cho ông cơ hội đi đến hầu như khắp nơi trên thế giới, đem lại cho ông danh tiếng quốc tế và một vị thế rất uy tín đối với các thế hệ nhà văn, nhà báo kế tiếp ông. Đã mười năm trôi qua kể từ ngày Ryszard Kapuściński ra đi, nhưng ông vẫn là nhà văn có tác phẩm được dịch và xuất bản ra nhiều ngôn ngữ khác nhau trên thế giới. Những phóng sự viết từ những năm 60 hay 70 của thế kỷ XX không hề mất đi tính thời sự của chúng, còn ngôn ngữ dùng để sáng tạo ra chúng thì vẫn rất hấp dẫn, thôi miên và kích thích trí tưởng tượng của đông đảo bạn đọc. 
        
        Mặc dù đã ra đời được nửa thế kỷ, những cuốn sách nổi tiếng của Ryszard Kapuściński như Hoàng đế hay Gỗ mun vẫn là những tác phẩm chứa đựng chuẩn mực của ngành báo, vẫn xứng đáng để chúng ta đọc và thưởng thức cách thức tác giả kể chuyện về thế giới. Ẩn sau những sáng tác của ông là một sự tò mò về thế giới và con người. Trong các cuốn sách của mình, hầu như không bao giờ ông giới thiệu về bản thân và các quan điểm cá nhân. Ông luôn cố gắng tìm hiểu và trình bày quan điểm của cả hai phía. Ông hành xử theo những gì đã được học trong trường phái phóng sự của Ba Lan – một trường phái có tên tuổi và được đánh giá cao trên thế giới, trường phái mà ông không chỉ là người đồng sáng lập, mà bản thân còn là một trong số những ngôi sao lớn. Những thế hệ phóng viên sau này trên toàn thế giới đã học được rất nhiều điều qua các bài giảng của ông và các hội thảo về ông.
        
        Dưới ngòi bút của Ryszard Kapuściński, những tác phẩm như Gỗ mun, Hoàng đế, Chiến tranh bóng đá, Szachinszach, Lapidarium, Thêm một ngày sống, Chân dung tự họa của người viết phóng sự, Đế chế hay cuối cùng là Du hành cùng Herodotus đã ra đời. Chúng vừa tạo nên yếu tố căn bản của phóng sự, vừa là lời khẳng định sự đam mê đặc trưng của tác giả. Mỗi cuốn sách là một kho tàng những lời khuyên quý báu về nghề nghiệp cũng như những hướng dẫn về cách sống. Chính sự linh hoạt trong sáng tác là nhân tố để sách của Kapuściński đã và đang được dịch sang hàng chục ngôn ngữ thế giới. Tại Việt Nam, hai cuốn sách của Ryszard Kapuściński đã đến tay bạn đọc, đó là Du hành cùng Herodotus và Gỗ mun do dịch giả Thái Linh chuyển ngữ. Ngoài ra bạn đọc Việt Nam có thể tiếp cận với một số trích đoạn của các cuốn sách khác. Tôi rất vui mừng khi cuốn Hoàng đế do Nguyễn Chí Thuật dịch sẽ là cuốn sách tiếp theo của Kapuściński được ra mắt bạn đọc Việt Nam.
        
        Tác phẩm Hoàng đế chỉ ra những sự thật về thế giới, tác phẩm hấp dẫn độc giả bởi cách truyền đạt, nghệ thuật dùng ngôn từ và khả năng quan sát của tác giả. Hoàng đế chắc chắn là tác phẩm xứng đáng có được sự chú ý của độc giả Việt Nam và tôi hy vọng rằng, cũng như hàng ngàn độc giả trên khắp thế giới, Quý vị sẽ yêu thích cuốn sách đem lại tiếng vang lớn này của Ryszard Kapuściński.
        
        Tôi xin chúc Quý vị có được cảm nhận thật thú vị khi đọc Hoàng đế. 
        
        Barbara Szymanowska
        
        Đại sứ Cộng hòa Ba Lan tại Việt Nam
        
        Hà Nội, năm 2017
        
        Mời bạn đón đọc.",
        'regular_price' => 79000,
        'sale_price' => 63000,
        'original_price' => 79000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '292'],
          ['name' => 'Kích thước', 'value' => '13 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Thái Hà'],
          ['name' => 'Khối lượng', 'value' => '330.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '09/01/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 10
      ]);

      Product::create([
        'name' => 'Từ Beirut Đến Jerusalem',
        'code' => strtoupper(str_random(6)),
        'author' => 'Thomas Friedman',
        'translator' => 'Đặng Ly',
        'publisher' => 'Nxb Thế giới',
        'summary' => "Cuốn sách viết về những xung đột gay gắt ở khu vực Trung Đông, được chia làm hai phần: Beirut và Jerusalem.

        Phần thứ nhất: Beirut, Friedman đã tái hiện một cách sống động về cuộc nội chiến của người dân Liban. Từ lịch sử cuộc nội chiến, những xung đột nội bộ gay gắt đến chi tiết nước Mỹ nhảy vào cuộc chiến này bằng cách nào và diễn biến ra sao đều được ống kính phóng viên của ông thu trọn.
        
        Phần thứ hai: Jerusalem, hai chương đầu là bức tranh thu nhỏ nền văn hóa của người Do Thái và nguồn gốc của người Israel, từ đó tác giả đi sâu phân tích lịch sử và diễn biến của cuộc xung đột giữa người Palestine và người Israel.
        
        Với giọng văn sắc sảo, trong sáng, Từ Beirut đến Jerusalem đã chạm sâu hơn vào lịch sử đau thương và vô cùng phức tạp của cuộc xung đột ở khu vực Trung Đông. Cuốn sách khiến độc giả trải nghiệm hết những cung bậc cảm xúc, từ những đau đớn tột cùng đến những nụ cười sảng khoái. Một cuốn sách không thể bỏ qua đối với bất cứ ai đang tìm kiếm cái nhìn sâu hơn về những nguyên nhân chính trị và những ảnh hưởng tâm lý của cuộc xung đột đa sắc tộc đã bủa vây khu vực chưa bao giờ chấm dứt tiếng súng này.
        
        Mời bạn đón đọc.",
        'regular_price' => 330000,
        'sale_price' => 264000,
        'original_price' => 330000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '768'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '1078.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa cứng'],
          ['name' => 'Ngày phát hành', 'value' => '16/06/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 10
      ]);

      //Tieu Thuyet
      Product::create([
        'name' => 'Người Cá',
        'code' => strtoupper(str_random(6)),
        'author' => 'Alexander Romanovich Belyaev',
        'translator' => 'Đỗ Ca Sơn',
        'publisher' => 'Nxb văn học',
        'summary' => "Người Cá là câu chuyện kể về một chàng trai được mệnh danh “quỷ biển” là sản phẩm khoa học của một vị giáo sư tận tâm, tốt bụng. Chàng trai luôn ẩn thân, tránh cái nhìn tò mò của con người mà cứu vớt những động vật yếu đuối ngoài đại dương, bị mắc nạn và bị đe dọa bởi con người. Nhưng cuối cùng, sự hiện diện của cậu cũng bị phát hiện. Những kẻ xấu chỉ nghĩ làm sao để trục lợi, bắt cậu phải mò ngọc trai cho chúng. Từ đây, tấm bi kịch của cậu và vị giáo sư kia thực sự bắt đầu.

        Câu chuyện khiến người đọc chìm đắm vào thế giới hỗn loạn đến kinh ngạc. Ở đó, bộ mặt thật của những người như lão Zurita luôn tìm mọi cách để kiếm tiền, dù đó là đồng tiền bẩn thỉu. Lão không tiếc rẻ bán đứng lương tâm, không tiếc rẻ dùng mưu hèn kế bẩn để đạt được mục đích. Và cả những kẻ liên quan, vì lòng tham mà lợi dụng sự tốt bụng của người khác, lợi dụng cả trẻ con, bán rẻ niềm tin và phản lại ơn nghĩa mình nhận được… Truyện ca ngợi tự nhiên, ca ngợi biển cả với tình yêu nhiệt thành nhất.
        
        Mời bạn đón đọc.",
        'regular_price' => 63000,
        'sale_price' => 51000,
        'original_price' => 63000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '236'],
          ['name' => 'Kích thước', 'value' => '13.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nxb văn học'],
          ['name' => 'Khối lượng', 'value' => '286.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '12/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 8
      ]);

      Product::create([
        'name' => 'Phỏng Vấn Ma Cà Rồng',
        'code' => strtoupper(str_random(6)),
        'author' => 'Anne Rice',
        'translator' => 'Hải Âu',
        'publisher' => 'Nxb văn học',
        'summary' => "Louisiana, 1791

        Tuyệt vọng khi chứng kiến người em trai hết mực thương yêu tự kết liễu cuộc đời và gánh chịu sự nghi ngờ của người thân,  Louis tưởng chừng sắp bước theo đoạn đường của em trai khi đột ngột, ma cà rồng Lestat tấn công ngay trước cửa nhà, và, tất cả chỉ mới chỉ bắt đầu…
        
        Buộc phải trở thành ma cà rồng khát máu trong khi vẫn khát khao giữ tính người, bị mắc kẹt trong cuộc đời bất tử bất đắc dĩ và vô vọng tìm kiếm một lối thoát cho bản thân, tưởng như số phận u tối của Louis đã mở sang trang với sự xuất hiện của Claudia, cô bé ma cà rồng. Nhưng, lại một lần nữa, hóa ra, tất cả chỉ mới bắt đầu…
        
        Mê hoặc, bất ngờ và không kém phần rùng rợn, Phỏng vấn ma cà rồng là câu chuyện về những hiểm nguy và trốn chạy, về tình yêu và mất mát, tàn nhẫn và bi thương.
        
        Phát hành lần đầu năm 1976, Phỏng vấn Ma cà rồng đã bán được hơn tám triệu bản trên toàn thế giới và từng được chuyển thể thành bộ phim cùng tên với sự tham gia của các ngôi sao lừng danh Brad Pritt, Tom Cruise và Kirsten Dunst.
        
        Mời bạn đón đọc.",
        'regular_price' => 109000,
        'sale_price' => 87000,
        'original_price' => 87000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '384'],
          ['name' => 'Kích thước', 'value' => '15 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Nhã Nam'],
          ['name' => 'Khối lượng', 'value' => '572.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '09/06/2016'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 8
      ]);

      //Tai Chinh va Tien Te
      Product::create([
        'name' => 'Tài Chính Doanh Nghiệp',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nhiều tác giả',
        'translator' => 'Nhiều dịch giả',
        'publisher' => 'NXB Kinh Tế TP.HCM',
        'summary' => 'Giảng dạy, học tập và áp dụng kiến thức tài chính doanh nghiệp vào thực tiễn luôn là một nhiệm vụ đầy thử thách nhưng cũng thú vị hơn bao giờ hết. Trong những thập kỷ vừa qua, chúng ta đã chứng kiến thị trường tài chính trên khắp thế giới cũng như các công cụ tài chính đã có những thay đổi mạnh mẽ và sâu rộng. Trong những năm đầu của thế kỷ 21, chúng ta thường xuyên thấy trên các ấn phẩm tài chính hàng ngày: các thông báo về các thương vụ mua bán, hợp nhất và sáp nhập doanh nghiệp (Mergers and Acquisitions), giá cả và thay đổi mức xếp hạng tín nhiệm đối với các loại trái phiếu dưới mức đầu tư, các doanh nghiệp thực hiện tái cấu trúc tài chính, huy động vốn thông qua chào bán công khai lần đầu (IPO), các vụ phá sản và sự cập nhật liên tục các công cụ phái sinh (Derivaties). Ngoài ra, ngày nay khi thẩm định các dự án đầu tư, để đảm bảo kết quả thẩm định là chính xác và đúng, các nhà quản trị tài chính phải biết tính đến các quyền chọn “thực” (Real options). Và khi doanh nghiệp huy động vốn để tài trợ cho các dự án đầu tư mới thì ngoài những kênh tài trợ truyền thống, thì những thay đổi mới trong vốn cổ phần tư nhân (private equity), vốn mạo hiểm (venture capital), các khoản vay thế chấp bằng bất động sản dưới chuẩn (subprime mortgages), các khoản cứu trợ (bailouts) và khoảng cách tín dụng của nền kinh tế (Credit spreads) là những kiến thức mà các nhà quản trị tài chính doanh nghiệp cần phải hiểu và thông thạo. 

        Như chúng ta đã biết, trong cuộc khủng hoảng tín dụng toàn cầu gần đây, thị trường chứng khoán đã sụp đổ nhưng sau đó thị trường tài chính thế giới lại phát triển sâu rộng hơn và hợp nhất lại với nhau mạnh mẽ hơn bao giờ hết. Vì vậy cả lý thuyết và thực tiễn trong quản trị tài chính doanh nghiệp luôn được cập nhật liên tục và tiến lên phía trước với tốc độ rất nhanh. Và như vậy, để kiến thức về tài chính doanh nghiệp không bị lạc hậu, công việc giảng dạy và học tập của các giảng viên cũng như sinh viên luôn phải tiến triển để bắt kịp với nhịp độ phát triển này. Tuy nhiên sự tiến triển này đã đặt những gánh nặng lớn lên việc giảng dạy và học tập môn tài chính doanh nghiệp. Một mặt, thế giới tài chính thay đổi quá nhanh làm cho việc cập nhật kiến thức trở nên khó khăn hơn. Mặt khác, giáo viên cần phải có khả năng phân biệt được đâu là những kiến thức tài chính có giá trị lâu dài và đâu là những kiến thức chỉ có giá trị tạm thời, để tránh sự cám dỗ giảng dạy và học theo mốt nhất thời. 
        
        Chúng tôi, thông qua cuốn sách này, đã đưa ra giải pháp cho vấn đề. Cuốn sách này nhấn mạnh đến các nguyên tắc cơ bản và hiện đại của lý thuyết tài chính, đồng thời làm chúng trở nên sống động và dễ hiểu bằng cách mang những lý thuyết tài chính này vào cuộc sống thông qua nhiều ví dụ minh họa thực tiễn về quản trị tài chính trong cuộc sống hiện tại, trong và ngoài Hoa Kỳ. 
        
        Thông thường các sinh viên khi đọc sách về Tài chính doanh nghiệp thì hầu hết đều xem các kiến thức trình bày trong cuốn sách như là một bộ sưu tập rời rạc các chủ đề không liên quan. Và chúng được ràng buộc liên quan với nhau chẳng qua là vì được đóng chung lại thành một cuốn sách. Chúng tôi tin rằng các bạn sẽ tìm thấy sự khác biệt rất lớn trong cuốn sách này: các nguyên tắc chính của Tài chính được trình bày rõ ràng, mạch lạc, và được nối kết với nhau một cách logic. Cụ thể, các quyết định tài chính tốt sẽ làm tăng giá trị cho công ty và cổ đông của nó, và quyết định tài chính tồi sẽ phá hủy giá trị. Chìa khóa để hiểu biết toàn bộ kiến thức về tài chính doanh nghiệp, hay làm thế nào mà giá trị doanh nghiệp được gia tăng hoặc bị tiêu hủy, chính là kiến thức về dòng tiền (cash flows). Để tăng giá trị doanh nghiệp, các công ty phải tạo ra nhiều tiền mặt hơn số tiền mà họ đã sử dụng. Chúng tôi hy vọng bạn sẽ tìm thấy nguyên tắc đơn giản và dễ hiểu này trong tất cả các phần nội dung khác nhau của cuốn sách này. 
        
        Mời bạn đón đọc.',
        'regular_price' => 659000,
        'sale_price' => 659000,
        'original_price' => 659000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '1096'],
          ['name' => 'Kích thước', 'value' => '19 x 27 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Bookshop-Loc'],
          ['name' => 'Khối lượng', 'value' => '1958.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2017'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 6
      ]);


      Product::create([
        'name' => 'Bitcoin Thực Hành: Những Khái Niệm Cơ Bản Và Cách Sử Dụng Đúng Đồng Tiền Mã Hóa',
        'code' => strtoupper(str_random(6)),
        'author' => 'Andreas M. Antonopoulos',
        'translator' => 'LeVN , Thu Hương',
        'publisher' => 'NXB ĐH Kinh tế Quốc dân',
        'summary' => 'Mastering Bitcoin cung cấp các kiến thức cần thiết để giúp độc giả gia nhập thế giới của tiền ảo. Bitcoin là đồng tiền số thành công đầu tiên không do bất kỳ một chính phủ nào phát hành. Mặc dù bitcoin vẫn đang ở giai đoạn mới hình thành tuy nhiên, nó đã tạo ra đươc một nền kinh tế hàng tỉ đô. Nền kinh tế này luôn mở ra chào đón tất cả những ai có kiến thức và đam mê gia nhập. Và cuốn sách cung cấp cho bạn kiến thức, còn bạn chỉ cần theo đuổi nó với đam mê.

        Cuốn sách này có gì:
        
        - Giới thiệu một cách khái quát về bitcoin
        
        - Các giải thích về nền tảng công nghệ của bitcoin và tiền số
        
        - Chi tiết về mạng lưới bitcoin, cấu trúc P2P, vòng đời giao dịch, các nguyên tắc an ninh
        
        - Ngoài ra còn gồm cả những bước tiến phát triển mới như Segregated Witness, Payment Channels, and Lightning Network
        
        - Các nội dung khác liên quan đến bitcoin và công nghệ blockchain như các ứng dụng, tiền và chuỗi thay thế
        
        - Câu chuyện của những người dùng, các ví dụ, những khái niệm về kỹ thuật...
        
        Mời bạn đón đọc.',
        'regular_price' => 299000,
        'sale_price' => 239000,
        'original_price' => 299000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '540'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '704.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 6
      ]);

      // Tai Chinh - Ke Toan
      Product::create([
        'name' => 'Kế Toán Tài Chính',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nhiều tác giả',
        'translator' => '',
        'publisher' => 'NXB Kinh Tế TP.HCM',
        'summary' => 'Thông tin kế toán là thông tin hết sức cần thiết và quan trọng đối với các nhà quản lý. Bất kỳ nhà quản lý nào trong bất kỳ doanh nghiệp nào – từ một tổ hợp công nghiệp đến một cửa hàng thực phẩm – đều phải dựa vào thông tin của kế toán để quản lý, điều hành, kiểm soát và ra các quyết định kinh tế.

        Kế toán tài chính là phân hệ thông tin thuộc hệ thống thông tin kế toán, thực hiện chức năng cung cấp thông tin về tình hình tài sản, nguồn vốn cũng như tình hình và kết quả hoạt động của doanh nghiệp để phục vụ cho yêu cầu quản lý của nhiều đối tượng khác nhau, bên trong cũng như bên ngoài doanh nghiệp. Chất lượng của thông tin kế toán tài chính có ảnh hưởng lớn và trực tiếp đến chất lượng và hiệu quả quản lý không chỉ đối với bản thân doanh nghiệp, mà còn với nhiều đối tượng khác trong đó có các cơ quan chức năng của nhà nước. Do vậy việc tổ chức, thực hiện tốt kế toán tài chính không chỉ là mối quan tâm của các doanh nghiệp mà còn là mối quan tâm của cơ quan soạn thảo, ban hành chế độ kế toán, của các cơ quan nhà nước thực hiện chức năng quản lý doanh nghiệp.
        
        Để giúp các nhân viên kế toán ở các doanh nghiệp cũng như giúp các bạn sinh viên học môn kế toán có tài liệu tham khảo trong nghiên cứu, học tập, ứng dụng kế toán tài chính chúng tôi biên soạn cuốn sách này.
        
        Cuốn sách bao gồm 19 chương, trình bày khá toàn diện các nội dung kế toán ở các loại hình doanh nghiệp khác nhau; kết hợp chặt chẽ giữa các vấn đề lý luận về tổ chức kế toán với việc hướng dẫn các phương pháp thu thập, xử lý, tổng hợp và cung cấp thông tin hữu ích cho các đối tượng khác nhau.
        
        Cuốn sách được biên soạn trên cơ sở tham khảo luật kế toán, các chuẩn mực kế toán đã ban hành, các Thông tư hướng dẫn thực hiện chuẩn mực kế toán; đặc biệt là cuốn sách đã chỉnh sửa, bổ sung những thay đổi của kế toán doanh nghiệp theo Thông tư 200/2014/TT-BTC. Tuy nhiên, cuốn sách được viết trong điều kiện nhiều quy định pháp lý trong quản lý DN đang có nhiều thay đổi, đồng thời với khả năng có hạn của người viết nên không thể tránh khỏi những khiếm khuyết. Nhóm tác giả rất mong được sự đóng góp của bạn đọc.
        
        Mời bạn đón đọc.',
        'regular_price' => 196000,
        'sale_price' => 176000,
        'original_price' => 196000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '908'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Kinh Tế'],
          ['name' => 'Khối lượng', 'value' => '1100.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '15/06/2015'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 5
      ]);


      Product::create([
        'name' => 'Kế Toán Tài Chính Trong Mối Quan Hệ Với Luật Kế Toán, 26 Chuẩn Mực Kế Toán',
        'code' => strtoupper(str_random(6)),
        'author' => 'PGS.TS. Võ Văn Nhị',
        'translator' => '',
        'publisher' => 'NXB Tài Chính',
        'summary' => 'Hệ thống chuẩn mực kế toán Việt Nam đã được nghiên cứu và ban hành, tính cho đến nay đã được 26 chuẩn mực. Như vậy trong một tương lai không xa, hệ thống chuẩn mực kế toán quốc gia sẽ được xây dựng hoàn chỉnh và áp dụng thống nhất trong nền kinh tế...

        Thực hiện kế toán tài chính phải đặt trên cơ sở tuân thủ các quy định của chuẩn mực, thì thông tin do nó cung cấp mới bảo đảm được độ tin cậy cần thiết, mới tạo ra được chất lượng thông tin phù hợp, và đáp ứng được nhu cầu sử dụng của các đối tượng bên trong cũng như bên ngoài doanh nghiệp, bên trong cũng như bên ngoài phạm vi của quốc gia.
        
        Việc kết nối các văn bản pháp lý về kế toán với việc thực hiện kế toán tài chính doanh nghiệp có ý nghĩa hết sức quan trọng, trong quá trình tạo thông tin để phục vụ cho nhu cầu sử dụng của nhiều đối tượng khác nhau, trong môi trường pháp lý và môi trường kinh doanh mà DN chịu sự chi phối. Cuốn sách này được biên soạn nhằm giúp bạn đọc bước đầu nhận diện được mối liên hệ chặt chẽ giữa các văn bản pháp lý về kế toán, và việc thực hiện kế toán tài chính trong doanh nghiệp.
        
        Mời bạn đón đọc.',
        'regular_price' => 120000,
        'sale_price' => 114000,
        'original_price' => 120000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '584'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Kinh Tế'],
          ['name' => 'Khối lượng', 'value' => '748.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '06/2010'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 5
      ]);

      //Ngoại thương
      Product::create([
        'name' => 'Thuế - Tax 2015',
        'code' => strtoupper(str_random(6)),
        'author' => 'Bộ Tài Chính',
        'translator' => '',
        'publisher' => 'Nxb Tổng hợp TP.HCM',
        'summary' => 'Biểu thuế xuất khẩu nhập khẩu và thuế Giá trị gia tăng hàng Nhập khẩu

        + Biểu thuế Nhập khẩu ưu đãi WTO 2015 – Thuế suất thuế Nhập khẩu thông thường.
        
        + Biểu thuế Nhập khẩu ưu đãi đặc biệt áp dụng trong phạm vi ASEAN.
        
        + Biểu thuế Nhập khẩu ưu đãi đặc biệt ASEAN – Trung quốc, ASEAN – Hàn Quốc, ASEAN – JAPAN, Australia - ASEAN - New Zealand, ASEAN – India.
        
        + Biểu thuế Nhập khẩu ưu đãi đặc biệt Vietnam-Japan, Vietnam-Chile.
        
        + Biểu thuế GTGT theo danh mục hàng hóa Nhập khẩu.
        
        Áp dụng đối với các tờ khai hàng hóa Nhập khẩu đăng ký với cơ quan Hải quan kể từ ngày 01/01/2015
        
        Cắt giảm thuế suất thuế Nhập khẩu theo lộ trình đã cam kết đối với hàng nghìn mặt hàng theo WTO, hiệp định ATIGA  – ACFTA – AKFTA – AANZFTA – AIFTA –VCFTA - AJCEP -  VJEPA.
        
        (ĐẦY ĐỦ - CHÍNH XÁC – TRA CỨU DỂ DÀNG )
        
        Nhằm thực hiện cam kết về thuế quan của Việt Nam trong các Hiệp định thương mại tự do giai đoạn 2015-2018, ngày 14/11/2014, Bộ Tài chính đã ban hành 05 Thông tư về Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện các Hiệp định thương mại tự do giai đoạn 2015-2018. Kể từ ngày 1/1/2015 (ngày các Thông tư trên có hiệu lực), hàng hóa nhập khẩu sẽ được áp dụng mức thuế suất nhập khẩu ưu đãi đặc biệt nếu đáp ứng tất cả các điều kiện nêu trong Thông tư. Cụ thể:
        
        + Thông tư số 165/2014/TT-BTC ngày 14/11/2014 của Bộ trưởng Bộ Tài chính về việc ban hành Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện Hiệp định thương mại hàng hóa ASEAN giai đoạn 2015-2018.
        
        + Thông tư số 166/2014/TT-BTC ngày 14/11/2014 của Bộ trưởng Bộ Tài chính về việc ban hành Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện Hiệp định thương mại hàng hóa ASEAN-Trung Quốc giai đoạn 2015-2018.
        
        + Thông tư số 167/2014/TT-BTC ngày 14/11/2014 của Bộ trưởng Bộ Tài chính về việc ban hành Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện Hiệp định thương mại hàng hóa ASEAN-Hàn Quốc giai đoạn 2015-2018.
        
        + Thông tư số 168/2014/TT-BTC ngày 14/11/2014 của Bộ trưởng Bộ Tài chính về việc ban hành Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện Hiệp định thương mại hàng hóa ASEAN-Úc-Niu Dilân giai đoạn 2015-2018.
        
        + Thông tư số 169/2014/TT-BTC ngày 14/11/2014 của Bộ trưởng Bộ Tài chính về việc ban hành Biểu thuế nhập khẩu ưu đãi đặc biệt của Việt Nam để thực hiện Hiệp định thương mại hàng hóa ASEAN-Ấn Độ giai đoạn 2015-2018.
        
        Biểu thuế đính kèm các Thông tư trên quy định mức thuế suất thuế nhập khẩu ưu đãi đặc biệt theo đúng cam kết của Việt Nam trong các Hiệp định thương mại hàng hóa. Tương ứng với những bước cắt giảm này của Việt Nam, các nước đối tác trong các Hiệp định thương mại hàng hóa trên (ASEAN, Trung Quốc, Hàn Quốc, Úc, Niu Dilân, Ấn Độ) sẽ xóa bỏ phần lớn thuế nhập khẩu cho hàng hóa của Việt Nam nhập khẩu vào các thị trường này trong giai đoạn 2015-2018.
        
        Trong trường hợp thuế suất của một mặt hàng quy định tại Biểu thuế nhập khẩu ưu đãi (MFN) thấp hơn mức thuế suất nhập khẩu ưu đãi đặc biệt thì mức thuế suất thuế nhập khẩu áp dụng cho mặt hàng này sẽ là mức thuế suất MFN (trong trường hợp này doanh nghiệp không phải nộp Giấy chứng nhận xuất xứ theo mẫu quy định tại các Thông tư cũng như đáp ứng các điều kiện khác nêu trong các Thông tư trên).
        
        Mời bạn đón đọc.',
        'regular_price' => 550000,
        'sale_price' => 440000,
        'original_price' => 550000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '1144'],
          ['name' => 'Kích thước', 'value' => '21 x 29 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Bảo Khôi'],
          ['name' => 'Khối lượng', 'value' => '2244.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '01/2015'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 4
      ]);


      Product::create([
        'name' => 'Giáo Trình Kinh Doanh Thương Mại Quốc Tế ',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nhiều Tác Giả',
        'translator' => '',
        'publisher' => 'Nxb Lao động - Xã hội',
        'summary' => 'Giáo trình này chúng tôi đề cập đến một số vấn đề lý thuyết và thực hành thường gặp trong kinh doanh thương mại quốc tế, với mục đích trao đổi cùng nhau rút kinh nghiệm giúp cho việc kinh doanh thuận lợi hơn, rủi ro ít hơn. 

        Cuốn sách bao gồm những nội dung chính sau: 
        
        Phần I: Tóm tắt những kiến thức cơ bản liên quan đến kinh doanh thương mại quốc tế 
        
        Chương I: Tỉ giá hối đoái và ảnh hưởng của nó đến hoạt động ngoại thương 
        Chương II: Những điều kiện thương mại quốc tế 
        Chương III: Thanh toán quốc tế 
        Chương IV: Hợp đồng mua bán hàng hoá ngoại thương 
        Chương V: Thuê phương tiện vận tải và giao nhận hàng hoá XNK 
        Chương VI: Mua bản hiểm cho hàng hoá XNK 
        Phần II: Thực hành kỹ thuật ngoại thương 
        
        Chương I: Tìm kiếm thị trường và thương nhân 
        Chương II: Đàm phán và ký kết HĐNT 
        Chương III: Thực hành HĐNT 
        Chương IV: Một số tình huống rủi ro trong kinh doanh 
        Mời bạn đón đọc.',
        'regular_price' => 185000,
        'sale_price' => 185000,
        'original_price' => 185000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '606'],
          ['name' => 'Kích thước', 'value' => '20 x 28 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Bookshop-Loc'],
          ['name' => 'Khối lượng', 'value' => '1166.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '06/2014'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 4
      ]);

      //Marketing - Bán hàng
      Product::create([
        'name' => 'Quảng Cáo Sáng Tạo',
        'code' => strtoupper(str_random(6)),
        'author' => 'Mario Pricken',
        'translator' => 'Anh Tú',
        'publisher' => ' NXB Hồng Đức',
        'summary' => 'Quảng cáo sáng tạo là cuốn cẩm nang chứa đựng những ý tưởng tuyệt vời. Tham vọng của nó là khiến người ta thích thú, đồng thời lạc quan.

        Với mong muốn đem lại một nhận thức sâu sắc về cách tư duy sáng tạo, cẩm nang này hứa hẹn sẽ lật mở các chiến lược của những nhà sáng tạo hàng đầu và giúp bạn hiểu thêm về những khuôn mẫu nằm ẩn sau những ý tưởng vĩ đại.
        
        Hãy vận dụng trực giác của bạn khi sử dụng cuốn sách này và tận hưởng nó – hãy tìm hiểu xem điều gì giúp bạn phát triển các ý tưởng tuyệt vời và thích thú khi làm công việc này.
        
        Mời bạn đón đọc.',
        'regular_price' => 299000,
        'sale_price' => 239000,
        'original_price' => 299000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '252'],
          ['name' => 'Kích thước', 'value' => '24 x 27.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '396.00 gam'],
          ['name' => 'Định dạng', 'value' => ' Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '10/08/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 3
      ]);

      Product::create([
        'name' => 'Quảng Cáo Tự Nhiên',
        'code' => strtoupper(str_random(6)),
        'author' => 'Dale Lovell',
        'translator' => 'Lê Trường An',
        'publisher' => 'Nxb Lao động',
        'summary' => 'Quảng cáo tự nhiên là hình thức truyền thông trả tiền có hình thức và tác động được lồng ghép vào nội dung nó thể hiện. Loại hình quảng cáo này ảnh hưởng đến tất cả chúng ta. Nếu bạn có điện thoại thông minh, sử dụng mạng xã hội hay đọc các nội dung trên Internet, chắc chắn là bạn đã tiếp xúc với quảng cáo tự nhiên mà thường không hề nhận ra. Dưới tác động của các xu hướng kỹ thuật số như quảng cáo di động, quảng cáo tự động, ứng dụng chặn quảng cáo, tin tức giả và trí thông minh nhân tạo, quảng cáo tự nhiên là một ngành công nghiệp trị giá hàng tỷ đô- la. Nó là điểm cốt lõi tạo nên thành công trên mặt trận kỹ thuật số của nhiều thương hiệu và công ty hàng đầu.

        Cuốn sách này sẽ dẫn bạn khám phá tương lai của quảng cáo kỹ thuật số và giải thích tại sao sự tăng trưởng của ngành này lại là điều tất yếu, dựa trên những ví dụ thực tế và các cuộc phỏng vấn những nhân vật đi đầu trong ngành marketing trên khắp thế giới, cùng với một loạt các điển cứu, trong đó có hai tờ báo The New York Times và The Independent.
        
        Quảng cáo tự nhiên sẽ đi xa hơn chứ không chỉ dừng lại ở những bài viết được tài trợ trên Facebook, các bài đăng được quảng cáo trên Twitter hay những bài báo gắn với thương hiệu trên BuzzFeed. Cuốn sách này sẽ xoáy thẳng vào trung tâm của câu chuyện: khán giả, ngân sách, nội dung và phương thức đo lường thành công. Cuốn sách chứa đầy những lời khuyên trực tiếp dành cho bất kỳ người làm tiếp thị nào đang muốn khai thác tối đa những đổi mới về kỹ thuật số.
        
        Mời bạn đón đọc.',
        'regular_price' => 139000,
        'sale_price' => 111000,
        'original_price' => 139000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '400'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Hải Đăng'],
          ['name' => 'Khối lượng', 'value' => '484.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 3
      ]);

      //Tôn giáo
      Product::create([
        'name' => 'Biểu Tượng Thần Thoại Về Chư Thiên & Linh Vật Phật Giáo',
        'code' => strtoupper(str_random(6)),
        'author' => 'Huỳnh Thanh Bình',
        'translator' => '',
        'publisher' => 'Nxb Tổng hợp TP.HCM',
        'summary' => 'Cuốn sách Biểu Tượng Thần Thoại Về Chư Thiên & Linh Vật Phật Giáo là tuyển tập những bài viết của tác giả về các chư thiên và linh vật, biểu tượng của Phật giáo. Trong từng bài viết, tác giả đã tìm về nguồn gốc, ý nghĩa cùng tín niệm của các vị thần và linh vật trong thần thoại, cổ sự Ấn Độ; kế đó là sự tiếp nhận để trở thành những vị hộ pháp, những biểu tượng tốt lành của Phật giáo.

        Mời bạn đón đọc.',
        'regular_price' => 170000,
        'sale_price' => 136000,
        'original_price' => 170000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => ''],
          ['name' => 'Kích thước', 'value' => ''],
          ['name' => 'Nhà phát hành', 'value' => 'Nxb Tổng hợp TP.HCM'],
          ['name' => 'Khối lượng', 'value' => ''],
          ['name' => 'Định dạng', 'value' => ''],
          ['name' => 'Ngày phát hành', 'value' => ''],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 16
      ]);


      Product::create([
        'name' => 'Ngôn Ngữ Của Chúa',
        'code' => strtoupper(str_random(6)),
        'author' => 'Francis S. Collins',
        'translator' => 'Lê Thị Thanh Thủy',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Trong cuốn sách này, ông chia sẻ với độc giả hành trình của chính mình từ một người vô thần tới có đức tin, sau đó dẫn dắt độc giả vào chuyến đi đầy kinh ngạc của khoa học hiện đại để chứng minh rằng vật lý, khoa học và sinh học đều hòa hợp được với đức tin vào Chúa và Kinh thánh. Ngôn ngữ của Chúa là cuốn sách không thể thiếu cho bất kỳ ai luôn băn khoăn về những câu hỏi vĩnh cửu: Tại sao chúng ta có mặt trên đời? Chúng ta đến cuộc đời này bằng cách nào ? Đâu là ý nghĩa đích thực của cuộc sống? 

        Câu hỏi trọng tâm cho cả cuốn sách này chính là: Liệu có thể có cơ hội cho sự hòa hợp giữa những quan điểm của giới khoa học và giới tâm linh khiến cả hai đều cảm thấy hoàn toàn hài lòng trong kỷ nguyên mới của vũ trụ học, của sự tiến hóa và của hệ gen người hay không? Tiến sĩ Collins đưa ra một cách giải quyết hoàn hảo cho tình trạng khó xử của những người vừa tin vào Chúa, vừa coi trọng khoa học. Đức tin vào Chúa và niềm tin vào khoa học có thể hòa hợp trong một thế giới. Đức Chúa mà ông đặt niềm tin vào có thể lắng nghe lời cầu nguyện và quan tâm đến phần hồn của chúng ta. 
        
        "Khoa học là cách duy nhất đáng tin cậy để hiểu về thế giới tự nhiên, và khi các công cụ của nó được sử dụng hợp lý, chúng ta sẽ có được hiểu biết sâu sắc về sự tồn tại của vật chất. Nhưng khoa học không thể trả lời được những câu hỏi như: Tại sao vũ trụ lại xuất hiện?, Sự tồn tại của con người có ý nghĩa gì?, Chuyện gì sẽ xảy ra sau khi chúng ta chết? Một trong những động lực mạnh mẽ nhất của con người chính là tìm kiếm câu trả lời cho những câu hỏi lớn này. Chúng ta cần kết hợp sức mạnh của cả khoa học và tôn giáo mới có thể thấu hiểu được những điều thấy và không thể nhìn thấy." – Francis S. Collins
        
        Mời bạn đón đọc.',
        'regular_price' => 139000,
        'sale_price' => 111000,
        'original_price' => 139000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '352'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '418.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 16
      ]);

      // Pháp luật
      Product::create([
        'name' => 'Cẩm Nang Pháp Luật Cá Nhân & Gia Đình',
        'code' => strtoupper(str_random(6)),
        'author' => 'Nguyễn Hữu Phước',
        'translator' => '',
        'publisher' => 'Nxb Tổng hợp TP.HCM',
        'summary' => 'Trong bối cảnh hiện chưa có một quyển sách nào tại Việt Nam thống kê các thủ tục pháp luật cho cá nhân và gia đình đầy đủ và chi tiết như vậy, Quyển sách Cẩm Nang Pháp Luật Cho Cá Nhân & Gia Đình ra đời nhằm giúp cho mọi người không còn mất nhiều thời gian, công sức và tiền bạc cho các công việc đó. Các thông tin cần thiết của hầu hết các vấn đề pháp lý của cá nhân và gia đình đều được liệt kê chi tiết trong quyển sách. Với mong muốn giúp bạn không chỉ hiểu được các vấn đề pháp lý có liên quan đến bản thân mình, gia đình mà còn có thể tự mình thực hiện các thủ tục này, Quyển sách trình bày các bước thực hiện các thủ tục hành chính một cách hệ thống và chi tiết. Nhiều thủ tục đã được tác giả tham khảo không chỉ từ các quy định pháp luật mà cả hướng dẫn thực tế từ các cơ quan Nhà nước nhằm mục đích đảm bảo các thông tin, hướng dẫn trong quyển cẩm nang sát với thực tế nhất.

        Quyển sách có thể được xem như một tủ thuốc nhằm giải quyết các vấn đề pháp luật tại gia cho mọi gia đình. Mỗi cá nhân và gia đình nên có quyển sách này tại nhà để tham khảo và tra cứu khi cần. Quyển sách này sẽ không chỉ giúp nâng cao sự hiểu biết và tuân thủ pháp luật của người dân, giảm thiểu thời gian, công sức của mọi người mà còn giúp giảm bớt khối lượng công việc tuyên truyền và hướng dẫn tuân thủ pháp luật cho người dân của các cơ quan nhà nước.
        
        Mời bạn đón đọc.',
        'regular_price' => 280000,
        'sale_price' => 244000,
        'original_price' => 244000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '632'],
          ['name' => 'Kích thước', 'value' => '15.5 x 23 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Tác giả Nguyễn Hữu Phước'],
          ['name' => 'Khối lượng', 'value' => '946.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '06/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 15
      ]);

      Product::create([
        'name' => 'Cẩm Nang Tra Cứu Pháp Luật Về Cạnh Tranh',
        'code' => strtoupper(str_random(6)),
        'author' => 'Phạm Hoài Huấn, Nguyễn Đình Thái',
        'translator' => '',
        'publisher' => 'NXB Chính Trị Quốc Gia',
        'summary' => 'Các cuốn cẩm nang này được xây dựng trên cơ sở rà soát và tập hợp các văn bản pháp lý điều chỉnh đối với các lĩnh vực chính yếu ở Việt Nam với các tiêu chí: Tổng hợp toàn bộ các văn bản hướng dẫn thi hành của luật được đề cập và loại bỏ các văn bản không còn giá trị pháp lý tính đến ngày sách được xuất bản.

        Điều đáng chú ý là, bộ Cẩm nang tra cứu pháp luật này không chỉ là sự tập hợp đơn thuần các văn bản pháp luật có liên quan, mà quan trọng hơn, đã chỉ rõ được điều nào trong luật được hướng dẫn thi hành và được hướng dẫn bởi những nghị định nào, tiếp đến các điều trong nghị định lại được hướng dẫn bởi điều nào trong các thông tư. Nói cách khác, toàn bộ các quy định của pháp luật được đưa về một chỗ duy nhất, để thuận tiện cho việc tra cứu và áp dụng.
        
        Mời bạn đón đọc.',
        'regular_price' => 52000,
        'sale_price' =>47000 ,
        'original_price' => 52000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '228'],
          ['name' => 'Kích thước', 'value' => '14.5 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'NXB Chính Trị Quốc Gia'],
          ['name' => 'Khối lượng', 'value' => '242.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '08/2016'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 15
      ]);

      //Lịch sử - Địa lý
      Product::create([
        'name' => 'Thế Giới Cho Đến Ngày Hôm Qua',
        'code' => strtoupper(str_random(6)),
        'author' => 'Jared Diamond ',
        'translator' => 'Hồ Trung',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Tác giả của những cuốn sách bestseller: Sụp đổ và Súng, Vi trùng và Thép đã khảo sát lịch sử xã hội loài người để trả lời câu hỏi: Chúng ta có thể học được gì từ các xã hội truyền thống để tạo nên một thế giới tốt đẹp hơn cho tất cả?

        Phần lớn chúng ta đều mặc nhiên thừa nhận các đặc trưng trong xã hội hiện đại của chúng ta, từ việc du lịch bằng máy bay, viễn thông cho tới việc biết đọc, biết viết và bệnh béo phì. Tuy nhiên gần như suốt sáu triệu năm tồn tại, xã hội loài người không có những điều này. Trong khi hố sâu ngăn cách chúng ta khỏi thủy tổ dường như rộng hơn bao giờ hết, chúng ta có thể nhìn ngắm lối sống cũ của mình trong những xã hội truyền thống mà phần lớn vẫn hoặc gần đây còn tồn tại. Các xã hội như New Guninea nhắc nhở chúng ta rằng mọi thứ thay đổi mới chỉ là ngày hôm qua - thời điểm chúng ta tiến hóa - và rằng cơ thể và cách thức thực hành xã hội của người cận đại vẫn giúp họ có khả năng thích nghi tốt hơn với những điều kiện truyền thống hơn là hiện đại. Thế giới cho đến ngày hôm qua cung cấp một bức tranh trực diện đầy mê hoặc về quá khứ nhân loại tồn tại hàng triệu năm, một quá khứ hầu như đã biến mất và xem xét những khác biệt giữa quá khứ và hiện tại cho cuộc sống hôm nay của chúng ta.
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 229000,
        'sale_price' => 183000,
        'original_price' => 229000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '600'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '902.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '07/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 14
      ]);


      Product::create([
        'name' => 'Miền Đất Huyền Ảo',
        'code' => strtoupper(str_random(6)),
        'author' => 'Jacques Dournes',
        'translator' => 'Nguyên Ngọc',
        'publisher' => 'Nxb Thông tin & truyền thông',
        'summary' => '"Nếu phải hiểu để mà có thể yêu, thì lại phải yêu để mà có thể hiểu."

Cần phải yêu, một tình yêu đầy kính trọng và tất cả ưu tú như Dambo đã yêu đối với đất nước và con người Tây Nguyên để có thể hiểu nó một cách thấu đáo, đặng có thể xử lý những câu hỏi không thể dễ dàng đặt ra vừa bức bách vừa lâu dài, cơ bản là ở đây. Và để có một tình yêu lâu dài như vậy, thì lại phải chăm chú hiểu nó, mảnh đất và con người nơi này. trong tất cả các chiều sâu tinh tế của nó, như tác giả của cuốn sách này, một con người không phải là người Việt Nam mà đã bỏ gần cả ba mươi năm, và là những năm dồi dào sức lực, trí tuệ nhất, những năm quý giá nhất của đời mình để cố hiểu và yêu nó.

- Nguyên Ngọc

Mời bạn đón đọc.',
        'regular_price' => 120000,
        'sale_price' => 96000,
        'original_price' => 120000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '384'],
          ['name' => 'Kích thước', 'value' => '16 x 24 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Huy Hoàng'],
          ['name' => 'Khối lượng', 'value' => '594.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 14
      ]);

      //Chính trị - Triết học
      Product::create([
        'name' => 'Quân Vương',
        'code' => strtoupper(str_random(6)),
        'author' => 'Niccolò Machiavelli',
        'translator' => 'Vũ Thái Hà',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Đây là cuốn sách gối đầu giường của rất nhiều thế hệ chính trị gia và lãnh đạo trên thế giới.

        Cuốn sách nhỏ của Niccolò Machiavelli đã hội tự những nguyên tắc làm nền móng cho khoa học quản trị nói chung và chính trị học nói riêng.
        
        Người ta sẽ luôn đọc Quân vương chừng nào con người vẫn chưa thôi trò chơi nguy hiểm nhưng hấp dẫn có cái tên "chính trị".
        
        Qua cuốn sách, độc giả sẽ tìm ra chân dung một vị quân vương hình mẫu : keo kiệt hay rộng lượng, độc ác hay nhân từ, thất hứa hay giữ lời nếu lời hứa đi ngược lại lợi ích của mình, phải làm gì để tránh bị dân chúng căm ghét, phải thực thi những hành động lớn lao để nâng cao uy tín của mình.
        
        Cuốn sách bàn về khoa học chính trị của nhà ngoại giao, nhà triết học và nhà quân sự người Ý – Niccolò Machiavelli. Xuất hiện lần đầu tiên vào năm 1513 nhưng mãi đến năm 1532, ấn bản đầu tiên mới được chính thức xuất bản dưới sự cho phép của Giáo hoàng Clement VII.
        
        Mời bạn đón đọc.',
        'regular_price' => 109000,
        'sale_price' => 87000,
        'original_price' => 109000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '200'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '220.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 13
      ]);

      Product::create([
        'name' => 'Cộng Hòa',
        'code' => strtoupper(str_random(6)),
        'author' => 'Plato',
        'translator' => 'Đỗ Khánh Hoan',
        'publisher' => 'Nxb Thế giới',
        'summary' => 'Cuốn sách được xem là cột mốc lớn của triết học phương Tây. Tác phẩm được trình bày dưới dạng đối thoại giữa Plato và những người khác. Mặc dù chủ đề chính là về một nhà nước lý tưởng nhưng nó cũng xoay quanh giáo dục, tâm lý, đạo đức và chính trị. Trong các đoạn chính của Cộng hòa, Plato sử dụng những huyền thoại để khám phá bản chất tự nhiên của thực tế, truyền đạt cái nhìn về sự tiên đoán của con người và vai trò của triết học trong việc thiết lập tự do. Ông tưởng tượng ra một cái hang mà những con người bị xiềng xích từ khi mới sinh ra làm bạn với cái bóng của mình và mang họ đến thực tế. Vai trò của triết học, cụ thể là những gì Plato gọi là biện chứng, là đưa con người ra khỏi cái bóng và hướng bản thân họ tới thực tế. Đây là bản chất của việc theo đuổi sự khôn ngoan mà không có nhà nước lý tưởng nào không làm. Độc giả hiện đại có thể đồng ý với mọi điều Plato nói, cũng như lập luận chặt chẽ, cái nhìn đầy chất thơ vẫn có sức mạnh trong việc kích thích và thách thức. Sức mạnh lâu dài này đã làm của Cộng hòa trở thành một trong những nền tảng của văn hóa phương Tây.

        Cộng hòa là cuốn sách đầu tiên rung chuyển thế giới, lay động tâm tư. Triết phẩm này chứa bên trong câu hỏi muôn thuở: Làm người nên sống thế nào cho phải ở đời? Thế nào là công bình? Thế nào là đạo đức ? – GS Đỗ Khánh Hoan
        
        Cộng hòa là tác phẩm nổi tiếng nhất của Plato và là tác phẩm có ảnh hưởng rất lớn tới sự phát triển tư duy triết học và lý thuyết chính trị suốt hơn 2.000 năm qua. Có người còn cho rằng nếu mang tất cả các sách vở trên đời ra đốt hết thì cũng không hề hấn gì, ngoại trừ cuốn Cộng hòa.
        
        Mời bạn đón đọc.
        ',
        'regular_price' => 255000,
        'sale_price' => 204000,
        'original_price' => 255000 * 0.5,
        'quantity' => rand(1,50),
        'attributes' => json_encode([ 
          ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
          ['name' => 'Số trang', 'value' => '728'],
          ['name' => 'Kích thước', 'value' => '14 x 20.5 cm'],
          ['name' => 'Nhà phát hành', 'value' => 'Alpha books'],
          ['name' => 'Khối lượng', 'value' => '660.00 gam'],
          ['name' => 'Định dạng', 'value' => 'Bìa mềm'],
          ['name' => 'Ngày phát hành', 'value' => '03/2018'],
        ]),
        'image' =>'',
        'user_id' => 1,
        'category_id' => 13
      ]);


      // Product::create([
      //   'name' => '',
      //   'code' => strtoupper(str_random(6)),
      //   'author' => '',
      //   'translator' => '',
      //   'publisher' => '',
      //   'summary' => '',
      //   'regular_price' => ,
      //   'sale_price' => ,
      //   'original_price' => * 0.5,
      //   'quantity' => rand(1,50),
      //   'attributes' => json_encode([ 
      //     ['name' => 'Ngôn ngữ', 'value' => 'Tiếng Việt'],
      //     ['name' => 'Số trang', 'value' => ''],
      //     ['name' => 'Kích thước', 'value' => ''],
      //     ['name' => 'Nhà phát hành', 'value' => ''],
      //     ['name' => 'Khối lượng', 'value' => ''],
      //     ['name' => 'Định dạng', 'value' => ''],
      //     ['name' => 'Ngày phát hành', 'value' => ''],
      //   ]),
      //   'image' =>'',
      //   'user_id' => 1,
      //   'category_id' => 17
      // ]);

    }
    
}
