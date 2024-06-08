from telegram import Update
from telegram.ext import ApplicationBuilder, CommandHandler, ContextTypes


async def hello(update: Update, context: ContextTypes.DEFAULT_TYPE) -> None:
    await update.message.reply_text(f'Hello {update.effective_user.first_name}. this is your res link [Wikipedia](http://2958566.letmesty.web.hosting-test.net/stats.php)')


app = ApplicationBuilder().token("7347946916:AAFbRvc-PEXh1ZVMPnaITpCohK-j4UhJGmA").build()

app.add_handler(CommandHandler("hello", hello))

app.run_polling()